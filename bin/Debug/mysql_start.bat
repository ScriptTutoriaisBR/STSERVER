@echo off
cd /D %~dp0
echo Não saia desse prompt enquanto estiver executando
echo Please dont close Window while MySQL is running
echo MySQL está tentando iniciar
echo Por favor, espere  ...
echo MySQL está começando com mysql\bin\my.ini (console)

mysql\bin\mysqld --defaults-file=mysql\bin\my.ini --standalone --console

if errorlevel 1 goto error
goto finish

:error
echo.
echo Não foi possível iniciar o MySQL
echo MySQL could not be started
pause

:finish
