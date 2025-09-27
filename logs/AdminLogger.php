<?php
class AdminLogger {
    private string $logFile;

    public function __construct(string $logDir = __DIR__ . '/logs', string $fileName = 'admin_actions.log') {
        if (!file_exists($logDir)) {
            mkdir($logDir, 0755, true);
        }

        $this->logFile = rtrim($logDir, '/') . '/' . $fileName;
    }

    public function log(string $adminId, string $action, string $details = ''): void {
        $timestamp = date('Y-m-d H:i:s');
        $ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN';

        // Nettoyage des données
        $action = $this->sanitize($action);
        $details = $this->sanitize($details);

        $entry = "[$timestamp] AdminID: $adminId | IP: $ipAddress | Action: $action | Details: $details\n";

        file_put_contents($this->logFile, $entry, FILE_APPEND | LOCK_EX);
    }

    private function sanitize(string $text): string {
        return str_replace(["\n", "\r"], '', $text);
    }
}
