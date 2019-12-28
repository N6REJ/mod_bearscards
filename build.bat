@echo off
cls
 echo "Starting build..."
rd /s /q .build
mkdir .build
copy *.* .build
del ".build\.*"
del ".build\build.bat"
xcopy /S /Y /I tmpl .build\tmpl
xcopy /S /Y /I language .build\language
xcopy /S /Y /I css .build\css
echo "Creating zip file..."
cd .build
setlocal EnableDelayedExpansion
FOR /F "skip=1 tokens=1-6" %%A IN ('WMIC Path Win32_LocalTime Get Day^,Hour^,Minute^,Month^,Second^,Year /Format:table') DO (
    if "%%B" NEQ "" (
        SET /A FDATE=%%F*10000+%%D*100+%%A
        SET /A FTIME=%%B*10000+%%C*100+%%E
    )
)

SET DatePartYear=%FDATE:~0,4%
SET DatePartMonth=%FDATE:~4,2%
SET DatePartDay=%FDATE:~6,2%
call "C:\Program Files\7-Zip\7z.exe" a -y -r ..\.releases\mod_bearscards-J3.9.%DatePartYear%.%DatePartMonth%.%DatePartDay%.zip *.*
cd ..
rd /s /q .build
cls
echo "Done..."
