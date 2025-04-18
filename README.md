# gpt-whatsapp-panel

## Overview
The gpt-whatsapp-panel is a platform designed to create and manage AI assistants that can interact with customers via WhatsApp Business. This project leverages the ChatGPT API to provide human-like responses, enabling businesses to enhance their customer service experience.

## Features
- **Assistant Management**: Create, train, and monitor AI assistants tailored for various stores.
- **WhatsApp Integration**: Seamlessly handle incoming messages and send responses through the WhatsApp Business API.
- **Product Management**: Add, update, and manage products either manually or through import from dump files.
- **Dashboard**: A comprehensive dashboard to monitor assistant performance and product statistics.

## Project Structure
```
gpt-whatsapp-panel
├── src
│   ├── Controllers
│   ├── Models
│   ├── Services
│   ├── Views
│   └── router.php
├── public
│   ├── index.php
│   └── assets
├── config
│   └── config.php
├── scripts
│   └── import_products.php
├── composer.json
└── README.md
```

## Installation
1. Clone the repository:
   ```
   git clone <repository-url>
   ```
2. Navigate to the project directory:
   ```
   cd gpt-whatsapp-panel
   ```
3. Install dependencies using Composer:
   ```
   composer install
   ```
4. Configure your environment settings in `config/config.php`.

## Usage
- Access the application by navigating to `public/index.php` in your web browser.
- Use the dashboard to manage assistants and products.
- Integrate with WhatsApp Business by configuring the WhatsApp API settings in the configuration file.

## Contributing
Contributions are welcome! Please submit a pull request or open an issue for any enhancements or bug fixes.

## License
This project is licensed under the MIT License. See the LICENSE file for more details.