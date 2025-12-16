# yii2-mermaid-asset

Mermaid asset bundle for Yii 2.0 Framework.

## Installation

```bash
composer require dmstr/yii2-mermaid-asset
```

### NPM Asset Installation

This package requires the `mermaid` npm package. The npm asset must be installed manually or via [foxy](https://github.com/fxpio/foxy).

**Manual installation:**

```bash
npm install mermaid@^11.0.0
```

**Via foxy:** The `package.json` in this package defines the required npm dependency and will be automatically installed when using foxy.

## Configuration

The asset bundle expects mermaid to be available at `@npm/mermaid/dist/`. Make sure the `@npm` alias points to your `node_modules` directory:

```php
Yii::setAlias('@npm', '@app/node_modules');
```

## Usage

Register the asset bundle in your view:

```php
\dmstr\web\MermaidAsset::register($this);
```

Then initialize mermaid in your JavaScript:

```javascript
mermaid.initialize({startOnLoad: true});
```
