<?php

class UpConfig {
    private $configFile;
    private $configData;

    public function __construct($configFile) {
        $this->configFile = $configFile;
        $this->loadConfig();
    }

    private function loadConfig() {
        if (file_exists($this->configFile)) {
            $this->configData = parse_ini_file($this->configFile);
        } else {
            throw new Exception("Konfiguracijska datoteka ne postoji.");
        }
    }

    public function getConfigValue($key) {
        if (isset($this->configData[$key])) {
            return $this->configData[$key];
        } else {
            throw new Exception("Konfiguracija '$key' nije definirana.");
        }
    }

    public function setConfigValue($key, $value) {
        $this->configData[$key] = $value;
    }

    public function saveConfig() {
        $configContent = '';
        foreach ($this->configData as $key => $value) {
            $configContent .= "$key=$value\n";
        }

        file_put_contents($this->configFile, $configContent);
    }
}

$configFile = "/home/reaper/konfiguracijska_datoteka.ini";
$configManager = new UpConfig($configFile);

$servername = $configManager->getConfigValue('servername');
$username = $configManager->getConfigValue('username');
$password = $configManager->getConfigValue('password');
$database = $configManager->getConfigValue('database');

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$connf) {
    die("Niste se spojili na bazu podataka: " . mysqli_connect_error());
}

echo "Uspješno ste se spojili na bazu podataka.";

