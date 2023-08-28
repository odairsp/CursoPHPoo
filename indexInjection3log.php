<?php

use app\classes\createLog;

interface LoggerInterface
{
    public function createLog();
}

class Logger
{
    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function doLogger()
    {
        return $this->logger->createLog();
    }
}

class DatabaseLogger implements LoggerInterface
{
    public function createLog()
    {
        return "Logger database.";
    }
}
class FileLogger implements LoggerInterface
{
    public function createLog()
    {
        return "Logger file.";
    }
}


$logger = new Logger(new FileLogger);

echo $logger->doLogger();
