@echo off
cd /D %~dp0
echo Não saia desse prompt enquanto estiver executando
echo Close only when you want to shut down
echo Feche este comando apenas para desligar
echo O Apache 2 está começando ...

apache\bin\httpd.exe

if errorlevel 255 goto finish
if errorlevel 1 goto error
goto finish

:error
echo.
echo Apache could not be started
echo Não foi possível iniciar o Apache
pause

:finish
