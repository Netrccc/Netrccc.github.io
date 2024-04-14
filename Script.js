$total = 0
$renamed = 0
Get-ChildItem -File -Recurse |
    Rename-Item -NewName {
        $old = $_.Name
        $new = $old -replace '^(\d\d)-(\d\d)_(.*)', '$1-0$2_$3'
        $script:total++
        if ($old -ne $new) {
            Write-Host "$old --> $new"
            $script:renamed++
        } else {
            Write-Host "$new"
        }
        $new
    }
"Total files checked: $total, including renamed: $renamed"
