# POC Translation

POC de gestion des traductions multilangues & traductions termes clients


## `symfony/translation`

https://symfony.com/doc/current/translation.html

### Configuration

```yaml
# config/packages/translation.yaml
framework:
    default_locale: fr
    translator:
        default_path: '%kernel.project_dir%/translations'
        fallbacks:
            - fr
            - en

```

### Traductions

```
/translations
    messages.en.yaml        <== fallback anglais
    messages.fr.yaml        <== fallback français
    messages.fr_A.yaml      <== termes client A sur base fr
    messages.fr_B.yaml      <== termes client B sur base fr
    messages.en_D.yaml      <== termes client D sur base en
```

### Utilisation

Ici avec la locale dans l'url, mais le principe est le même quelque soit la façon de gérer la locale

```php
// Controller 
/**
 * @Route("/{_locale}/", name="index")
 * param "magique" pour gérer la locale : _locale
 */
public function index()
{
    return $this->render("template.html.twig", [...]);
}

```