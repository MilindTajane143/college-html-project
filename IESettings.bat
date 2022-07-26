Reg Add "HKEY_CURRENT_USER\Software\Microsoft\Internet Explorer\Main\FeatureControl\FEATURE_BROWSER_EMULATION" /f /v "iexplore.exe" /t REG_DWORD /d "10001"
Reg Add "HKCU\Software\Microsoft\Windows\CurrentVersion\Internet Settings\zones\1" /f /v "1001" /t REG_DWORD /d "0x0"
Reg Add "HKCU\Software\Microsoft\Windows\CurrentVersion\Internet Settings\zones\1" /f /v "1004" /t REG_DWORD /d "0x0"
Reg Add "HKCU\Software\Microsoft\Windows\CurrentVersion\Internet Settings\zones\1" /f /v "1201" /t REG_DWORD /d "0x0"

echo msgbox"IE Settings has been changed Successfully. Please Close the browser and Reopen.">a.vbs&a.vbs&del a.vbs