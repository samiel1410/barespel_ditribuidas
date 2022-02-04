@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../rogervila/php-sonarqube-scanner/sonar-scanner
php "%BIN_TARGET%" %*
