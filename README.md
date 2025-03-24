[![All Contributors](https://img.shields.io/github/all-contributors/OpenBookerApp/OpenBooker?color=ee8449&style=flat-square)](#contributors)
[![Star on GitHub](https://img.shields.io/github/stars/OpenBookerApp/OpenBooker.svg?style=social)](https://github.com/OpenBookerApp/OpenBooker/stargazers)

# OpenBooker
 
**Open-source web-based appointment booking system built with Laravel and Livewire.**

## 🚀 Features
- Business & customer accounts
- Appointment scheduling & booking
- Interactive calendar with availability management
- Email & SMS notifications
- Admin & business dashboard
- Role-based access control
- Rescheduling & cancellations
- API for integrations (Planned)
- Google Calendar & Outlook integration (Planned)
- Payment processing with Stripe/PayPal (Planned)

## 🛠️ Tech Stack
- **Backend:** Laravel
- **Frontend:** Livewire with TailwindCSS v4 and MaryUI v2
- **Database:** MySQL

## 📦 Installation
### Prerequisites
- PHP 8.x
- Composer
- MySQL
- Node.js & npm

### Setup
```sh
# Clone the repository
git clone https://github.com/OpenBookerApp/OpenBooker.git
cd OpenBooker

# Install dependencies
composer install
npm install && npm run dev

# Copy .env file and set environment variables
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate --seed

# Start the server
php artisan serve
```

## 📖 Usage
1. Register as a business or customer.
2. Set up business hours and services.
3. Allow customers to book appointments.
4. Receive notifications and manage bookings from the dashboard.

## Contributors ✨

Thanks go to these wonderful people ([emoji key](https://allcontributors.org/docs/en/emoji-key)):

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore-start -->
<!-- markdownlint-disable -->
<table>
  <tbody>
    <tr>
      <td align="center" valign="top" width="14.28%"><a href="https://github.com/ntoufoudis"><img src="https://avatars.githubusercontent.com/u/93659348?v=4?s=100" width="100px;" alt="Vasileios Ntoufoudis"/><br /><sub><b>Vasileios Ntoufoudis</b></sub></a><br /><a href="#code-ntoufoudis" title="Code">💻</a></td>
    </tr>
  </tbody>
</table>

<!-- markdownlint-restore -->
<!-- prettier-ignore-end -->

<!-- ALL-CONTRIBUTORS-LIST:END -->

This project follows the [all-contributors](https://allcontributors.org) specification.
Contributions of any kind are welcome!

## 📜 License
OpenBooker is open-source and licensed under the [MIT License](LICENSE).

## 🌟 Contributing
We welcome contributions! Please check our [Contributing Guide](CONTRIBUTING.md) for details.

## 📬 Contact
For questions or suggestions, feel free to open an issue or reach out to [info@ntoufoudis.com](mailto:info@ntoufoudis.com).
