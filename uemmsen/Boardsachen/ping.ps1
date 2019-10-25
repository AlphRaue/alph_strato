        # Bildschirm leeren:
clear host

        # Ausgabepfade festlegen:
$a = 'c:\ping_ascii.txt'
$b = 'c:\ping__utf8.txt'

        # Hostadresse eintragen:
$ip='172.246.247.1'

        # Daten ermitteln:
$user    = net user
$ping    = ping $ip
$config  = ipconfig -all

        # Trennlinien für die Ausgabe:
$trenn0  = '*********************************** beginning ****************************************'
$trenn1  = '*********************************** next point ***************************************'
$trenn2  = '*********************************** end of script ************************************'
    
        # Evtl. vorhandene Dateien leeren:
Clear-Content $a
Clear-Content $b
$x = 'Alle Dateien leer in Zeile 26' 
$x
        pause

        # Daten schreiben:
Get-Date | Out-File $a -width 120
$ip      | Out-File $a -width 120 -Append 
$trenn0  | Out-File $a -width 120 -Append
$user    | Out-File $a -width 120 -Append
$trenn1  | Out-File $a -width 120 -Append
$ping    | Out-File $a -width 120 -Append
$trenn1  | Out-File $a -width 120 -Append
$config  | Out-File $a -width 120 -Append
$trenn2  | Out-File $a -width 120 -Append
$x = 'Inhalt von $a wurde in Datei ping_ascii.txt geschrieben in Zeile 40' 
$x
        pause

        # Funktion zur Umwandlung der Umlaute:
Function Uml_Replace
{
 param ( [string]$a )
 
        # replace map:
    $characterMap = @{}
    $characterMap.([Int][Char]'ä') = 'ae'
    $characterMap.([Int][Char]'ö') = 'oe'
    $characterMap.([Int][Char]'ü') = 'ue'
    $characterMap.([Int][Char]'ß') = 'ss'
    $characterMap.([Int][Char]'Ä') = 'Ae'
    $characterMap.([Int][Char]'Ü') = 'Ue'
    $characterMap.([Int][Char]'Ö') = 'Oe'
    $characterMap.([Int][Char]' ') = '.'
    $characterMap.([Int][Char]'á') = '_'
    
        # replace chars:
    ForEach ($key in $characterMap.Keys) {
        $a = $a -creplace ([Char]$key),$characterMap[$key] 
    }
 
        # replace result:
     Get-Content $a
     $x = 'In der Funktion. Abgearbeiteter Inhalt von $a (in Zeile 68)' 
     $x
        pause
clear host
        # Ergebniß in ping__utf8.txt schreiben:
     $a | out-file $b
}

        # Daten aus ping_ascii.txt holen...
Get-Content $a
$x = 'Inhalt von $a vor Übergabe an Funktion (in Zeile 78)' 
$x
        pause
clear host
        # ...und an die Funktion übergeben:
Get-Content $a
$x = 'Inhalt von $a nach Übergabe an Funktion (in Zeile 84)' 
$x
        pause
Uml_Replace $a

        # Ausgabe von ping__utf8.txt am Bildschirm:
clear host
Get-Content $b