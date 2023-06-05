<?php

namespace tools\app;
class DataCompare
{
    private $hasCsvHead;
    private $data;

    public function readDataFromFile($fileName): bool
    {
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

        if ($fileExtension === 'csv') {
            $file = fopen($fileName, 'r');

            if ($file) {
                $this->data = [];
                $this->hasCsvHead = false;

                while (($line = fgetcsv($file)) !== false) {
                    $this->data[] = $line;
                }

                fclose($file);
                return true;
            }
        }

        return false;
    }

    public function writeToDatabase(): bool
    {
        return true;
    }
}