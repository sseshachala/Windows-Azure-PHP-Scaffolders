echo off

set PWD=%CD%

REM Folder containing the scaffold
set JVer=1.7.3



echo Cleaning up previous Joomla scaffolder files
 rmdir /S /Q %PWD%\build
 mkdir %PWD%\build

echo Building scaffold .phar file 
 call scaffolder build -in="%PWD%\Joomla" -out="%PWD%\build\Joomla.phar"

echo Creating project directories
call scaffolder run -out="%PWD%\build\Joomla" -s="%PWD%\build\Joomla.phar" -DB_NAME database_name -DB_USER "user@lhost" -DB_PASSWORD "*******" -DB_HOST "******.database.windows.net"  -sync_account "account enpoint" -sync_key "account key" 

REM -out="%PWD%\build\Joomla"

echo Packaging project
call package create -in="%PWD%\build\Joomla" -out="%PWD%\build" -dev=false
