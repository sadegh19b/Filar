## 📦 Installation

For local development.

```
docker compose up -d --build
docker exec app.dev bash
composer i
npm i && npm run build
```

## 🔀 Git

### Commit Messages

For commit messages, use the following [conventional commits](https://www.conventionalcommits.org/en/v1.0.0/), please read it before starting to work.

### Git Flow

We use the [git flow](https://nvie.com/posts/a-successful-git-branching-model/) branching model, please read it before starting to work.

If you want to ignore permission changes to git in the project, you can use the following command:
```
git config core.fileMode false
```

or globally:
```
git config --global core.fileMode false
```

