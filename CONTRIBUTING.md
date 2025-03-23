# Contributing to OpenBooker

Thank you for considering contributing to OpenBooker! We welcome all contributions, whether it's fixing bugs, adding new features, or improving documentation.

## 🛠 Getting Started
### 1. Fork the Repository
Click the **Fork** button on the top right of the repository page to create a copy of this repo under your GitHub account.

### 2. Clone Your Fork
```sh
git clone https://github.com/your-username/OpenBooker.git
cd OpenBooker
```

### 3. Create a Branch
```sh
git checkout -b feature-branch-name
```
Use a meaningful name related to your contribution.

### 4. Install Dependencies
```sh
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
```

### 5. Make Your Changes
- Follow Laravel & Livewire best practices.
- Maintain code consistency.
- Ensure proper documentation & comments.

### 6. Run Tests
```sh
php artisan test
```
Make sure all tests pass before submitting your changes.

### 7. Commit Your Changes
```sh
git add .
git commit -m "Add feature: short description"
```

### 8. Push and Submit a PR
```sh
git push origin feature-branch-name
```
Go to GitHub and open a **Pull Request (PR)** to the `main` branch.

## 📝 Contribution Guidelines
- Follow [PSR-12](https://www.php-fig.org/psr/psr-12/) coding standards.
- Write clear, self-documenting code.
- Keep PRs small and focused.
- Add relevant tests for new features.

## 🤝 Code of Conduct
By contributing, you agree to follow our [Code of Conduct](CODE_OF_CONDUCT.md).

## 📬 Need Help?
Feel free to open an issue or discuss in the GitHub Discussions section.

Happy coding! 🚀
