# Downloading and Installing PHP Using Chocolatey

This guide explains how to download and install PHP on Windows using Chocolatey, a powerful package manager for Windows.

## What is Chocolatey?

Chocolatey is a software management solution that allows you to install, upgrade, and uninstall applications on Windows with simple commands. It works similar to package managers on Linux systems, making software installation more efficient and consistent.

## Prerequisites

- Windows 7 or later
- Administrative privileges on your computer
- Internet connection

## Installing Chocolatey

Before installing PHP, you need to install Chocolatey first:

1. **Open PowerShell as Administrator**:
   - Press `Win + X` and select "Windows PowerShell (Admin)" or "Command Prompt (Admin)"
   - Confirm the User Account Control prompt if it appears

2. **Run the Chocolatey installation command**:
   ```powershell
   Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://community.chocolatey.org/install.ps1'))
   ```

3. **Verify the installation**:
   ```powershell
   choco --version
   ```
   This should display the installed Chocolatey version.

## Installing PHP with Chocolatey

Once Chocolatey is installed, you can easily install PHP:

1. **Open PowerShell as Administrator** (if not already open)

2. **Install PHP using Chocolatey**:
   ```powershell
   choco install php
   ```
   This will install the latest stable version of PHP.

3. **Specify a particular PHP version** (optional):
   ```powershell
   choco install php --version=8.2.7
   ```
   Replace `8.2.7` with your desired PHP version.

4. **Verify PHP installation**:
   ```powershell
   php --version
   ```
   This should display the installed PHP version information.

## Installing PHP Extensions

You can install additional PHP extensions using Chocolatey as well:

```powershell
choco install php-xdebug
```

Other common extensions:
```powershell
choco install php-imagick
choco install php-redis
```

## Configuring PHP

After installation, the PHP configuration file (`php.ini`) is located at:
```
C:\tools\php\php.ini
```

Common configuration changes:
1. Open the file in a text editor (as administrator)
2. Uncomment extensions by removing the semicolon (`;`) at the beginning of the line
3. Adjust memory limits, upload sizes, etc. as needed

## Updating PHP

To update PHP to the latest version:

```powershell
choco upgrade php
```

## Uninstalling PHP

If you need to uninstall PHP:

```powershell
choco uninstall php
```

## Troubleshooting

### PHP Not Found in Path

If you get "PHP is not recognized as an internal or external command" error:

1. Restart your terminal/PowerShell after installation
2. If the issue persists, manually add PHP to your PATH:
   - Go to System Properties > Advanced > Environment Variables
   - Edit the PATH variable and add `C:\tools\php`("the path may wary for you)
   - Restart your terminal

### Extension Loading Issues

If you have issues with extensions:
1. Make sure the extension is uncommented in php.ini
2. Verify the extension path is correct
3. Check PHP error logs for specific error messages

## Additional Resources

- [Chocolatey Website](https://chocolatey.org/)
- [PHP Documentation](https://www.php.net/docs.php)
- [PHP Windows Downloads](https://windows.php.net/download/)