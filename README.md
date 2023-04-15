# Magewire Plugin - Private Content Version

At every POST request the private content version is updated (at least in hyva). That means that on the next request the customer section data is loaded.
But if you use magewire for usual content that has nothing to do with the customer or any cart actions it's an unnecessary request.

To avoid this request this module gives you the ability to set a url whitelist for requests that don't need the update of the private content version.

### Adding an url to the whitelist

If you have a magewire component which for example just loads a product list. The POST url maybe look like this:

`/magewire/post/livewire/message/productlist`

This kind of request doesn't require a reload of the customer section data, so we can add it to the whitelist.

Add the following to your di.xml:

```
<type name="MVenghaus\MagewirePluginPrivateContentVersion\Model\MagewireUrls">
    <arguments>
        <argument name="urls" xsi:type="array">
            <item name="productlist" xsi:type="string">/magewire/post/livewire/message/productlist</item>
        </argument>
    </arguments>
</type>
```

### Trigger an update of the private content version

There are cases where one magewire component can have different methods, but not all methods need an update of the private content version.

First add the url to the whitelist and then trigger the update yourself:

```
$this->eventManager->dispatch('private-content-version-update');
```