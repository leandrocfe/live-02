## Installation

```bash
git clone https://github.com/leandrocfe/live-02.git
```

Run the commands:

```bash
cd live-02
cp .env.example .env
composer install
```

Laravel sail:

```bash
sail up -d
```

Run the commands:

```bash
sail artisan key:generate
sail artisan migrate
sail npm i
sail npm run dev
```

## Usage
Create a new user account with the following command:

```bash
sail artisan make:filament-user
```

Open /admin in your web browser, sign in, and start your app!