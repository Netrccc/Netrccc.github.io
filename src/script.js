"use strict";

function ajax(url, callback) {
  var xhr = new window.XMLHttpRequest();
  xhr.open("GET", url + "?rel=page", true);
  xhr.onload = function () {
    if (xhr.readyState === xhr.DONE && xhr.status >= 200 && xhr.status < 300) {
      if (this.response) {
        callback.call(this, this.response);
      }
    }
  };
  xhr.send();
}

var anchor = document.querySelectorAll("a[rel=page]");
[].slice.call(anchor).forEach(function (trigger) {
  trigger.addEventListener("click", function (e) {
    e.preventDefault();

    var pageUrl = this.getAttribute("href");

    ajax(pageUrl, function (data) {
      document.querySelector("#load").innerHTML = data;
    });

    if (pageUrl != window.location) {
      window.history.pushState({ url: pageUrl }, "", pageUrl);
    }
    return false;
  });
});

window.addEventListener("popstate", function () {
  ajax(this.window.location.pathname, function (data) {
    document.querySelector("#load").innerHTML = data;
  });
});

/**
 * add event listener on multiple elements
 */

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
};

/**
 * NAVBAR
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("nav-active");
};

addEventOnElements(navTogglers, "click", toggleNavbar);

/**
 * HEADER & BACK TOP BTN
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

let lastScrollPos = 0;

const hideHeader = function () {
  const isScrollBottom = lastScrollPos < window.scrollY;
  if (isScrollBottom) {
    header.classList.add("hide");
  } else {
    header.classList.remove("hide");
  }

  lastScrollPos = window.scrollY;
};

/**
 * PARALLAX EFFECT
 */

const parallaxItems = document.querySelectorAll("[data-parallax-item]");

let x, y;

window.addEventListener("mousemove", function (event) {
  x = (event.clientX / window.innerWidth) * 10 - 5;
  y = (event.clientY / window.innerHeight) * 10 - 5;

  // reverse the number eg. 20 -> -20, -5 -> 5
  x = x - x * 2;
  y = y - y * 2;

  for (let i = 0, len = parallaxItems.length; i < len; i++) {
    x = x * Number(parallaxItems[i].dataset.parallaxSpeed);
    y = y * Number(parallaxItems[i].dataset.parallaxSpeed);
    parallaxItems[i].style.transform = `translate3d(${x}px, ${y}px, 0px)`;
  }
});
