# Magewire Plugin - Private Content Version

Disables the update of private content version on POST requests.

You have to take care of it yourself:

```
$this->eventManager->dispatch('private-content-version-update');
```