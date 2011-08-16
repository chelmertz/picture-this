#picture-this
Generates image placeholders. Call it through an URL to display it:

##example

```php
<img src="picture-this.php?w=500&h=200&bg=ebd&fg=f00" alt="placeholder" />
```
would display

![Example 1](https://github.com/chelmertz/picture-this/raw/master/picture-this-example-1.png)

##api
Append each option through GET

<table>
        <tr>
                <th>parameter</th>
                <th>description</th>
                <th>default value</th>
        </tr>
        <tr>
                <td>w</td>
                <td>width in px</td>
                <td>200</td>
        </tr>
        <tr>
                <td>h</td>
                <td>height in px</td>
                <td>100</td>
        </tr>
        <tr>
                <td>fg</td>
                <td>foreground color</td>
                <td>#fff</td>
        </tr>
        <tr>
                <td>bg</td>
                <td>background color</td>
                <td>#000</td>
        </tr>
        <tr>
                <td>t</td>
                <td>text to put on image</td>
                <td>width x height ("200 x 100" by default)</td>
        </tr>
</table>

##recommendation
Build a view helper to utilize it with your project's color codes and without having to type `<img...` all of the time.
