# Codeception TestRail Integration

The extension allows to integrate your test with TestRail. First run will create test suites and test cases.

# Features
 * Creates test suites and test cases automaticaly
 * Tracks all runs with given version

# Configuration:
```yml

extensions:
    enabled:
        - Codeception\TestRail\TestRailIntegrationExtension
    config:
        Codeception\TestRail\TestRailIntegrationExtension:
            version: "%VERSION%"
            url: "https://trail.example.com/index.php?"
            username: "autotest@example.com"
            password: "password"
            projectId: "1"

```

# Run
```bash
VERSION=1.2 codecept run api -d 
Codeception PHP Testing Framework v2.5.4
Powered by PHPUnit 6.5.12 by Sebastian Bergmann and contributors.
Running with seed:


  Version is not specified. TestRails integration is enabled. Version: 1.2
...
Time: 4.4 seconds, Memory: 20.25MB

OK (3 tests, 11 assertions)
```
