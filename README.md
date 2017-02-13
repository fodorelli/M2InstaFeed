# M2InstaFeed
Magento 2 Instafeed Intergration

The following extension uses the <a href="https://github.com/stevenschobert/instafeed.js">Instafeed.js</a> script to incorperate instagram blocks directly in your Magento 2 website it can be easily implimented using a widget or a block element which can be found below.

Installation

Option 1 is install using composer
Option 2: Download the files and stick in a folder under app/code/Davagordon/Instafeed

After you have uploaded the files dont forget to run setup:upgrade in the command line 


<strong>Layout XML Implimentation</strong><br />
```
        <referenceContainer name="main.content">
            <block class="Davagordon\Instafeed\Block\Widget\InstaFeed" name="instafeed.hp">
                <arguments>
                    <argument name="blocktitle" xsi:type="string">Instagram</argument>
                    <argument name="get" xsi:type="string">tagged</argument>
                    <argument name="tagged" xsi:type="string">tagged</argument>
                    <argument name="links" xsi:type="string">true</argument>
                    <argument name="tag" xsi:type="string"></argument>
                    <argument name="user" xsi:type="string"></argument>
                    <argument name="resolution" xsi:type="string">low_resolution</argument>
                </arguments>
            </block>
        </referenceContainer>
```
<br />
<strong>Widget Implimentation via CMS pages</strong><br />
```{{widget type="Davagordon\Instafeed\Block\Widget\InstaFeed" get="popular" sortby="most-recent" links="1" limit="8" resolution="thumbnail"}}```


<strong>Templating Shortcodes</strong><br />

    ```
    {{type}} - the image's type, can be image or video.
    {{width}} - the image's width, in pixels.
    {{height}} - the image's height, in pixels.
    {{orientation}} - the image's orientation, can be square, portrait, or landscape.
    {{link}} - URL to view the image on Instagram's website.
    {{image}} - URL of the image source. The size is inherited from the resolution option.
    {{caption}} - Image's caption text. Defaults to empty string if there isn't one.
    {{likes}} - Number of likes the image has.
    {{comments}} - Number of comments the image has.
    {{location}} - Name of the location associated with the image. Defaults to empty string.
    {{id}} - Unique ID of the image. Useful if you want to use iPhone hooks to open the images directly in the Instagram app.
    ```
    
<strong>Support</strong><br />
    If for any reason you have an issue installing or implimenting please drop me a message and ill see what i can do for you
