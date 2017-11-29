Web Developer Test
=

**You have**

 - [data.json](https://github.com/theartgames/webdeveloper-test/blob/master/data.json) which contains a product list (fields described below)
 - EURO as currency for price fields ( &euro; )
 - index.php as entry point

**You can**

 - Add any .css/.js file you want
 - Import or use any libraries you want as long as you add reference to them
 - Use the following languages: JS, PHP
 - Make mistakes
 - Fork/Star/Download this repository and create pull requests for test improvements
 - Be creative

**You must**

 - [ ] Build a search script that traverse [data.json](https://github.com/theartgames/webdeveloper-test/blob/master/data.json) and returns search results based on input
 - [ ] Build a basic interface (HTML/CSS) that uses the script above and outputs results

**You may consider** (*optional but grants extra XP points*)

 - [ ] Build or use an advanced searching algorithm
 - [ ] Search script still returns results even if you have spelling errors
 - [ ] Search script returns related results if nothing is found for user's input
 - [ ] Interface has working filters based on fields
 - [ ] Interface has working sorting options
 - [ ] Search and show results without leaving or refreshing the page
 - [ ] Store user's recent searches
 - [ ] Clean coding style

**[data.json](https://github.com/theartgames/webdeveloper-test/blob/master/data.json) Fields explanation**

| Field      	| Type    	| Description                                          	|
|------------	|---------	|------------------------------------------------------	|
| **aname**      	| string  	| Artist Name (you can treat it as manufacturer/brand) 	|
| **pname**      	| string  	| Product Name                                         	|
| **pdesc**      	| string  	| Product Description                                  	|
| **sku**        	| string  	| Product Code                                         	|
| **url**        	| string  	| Product URL                                          	|
| **img, img_*** 	| string  	| Product main image with various dimensions            	|
| **all_images** 	| array   	| All product images listed as array                   	|
| **lot_nr**    	| numeric 	| Lot number (you can treat it as ordering number)     	|
| **lot_emin**   	| numeric 	| Informative price meaning "Minimum Estimate"         	|
| **lot_emax**   	| numeric 	| Informative price meaning "Maximum Estimate"         	|
| **lot_est**    	| string  	| Concatenation of lot_emin and lot_emax               	|
| **auction**   	| string  	| Product category                                     	|


## License
![License](https://i.creativecommons.org/l/by-nc/4.0/80x15.png)

[Art Games - Web Developer Test](https://github.com/theartgames/webdeveloper-test) by [ART GAMES](http://www.artgames.ro) is licensed under a [Creative Commons Attribution-NonCommercial 4.0 International License](http://creativecommons.org/licenses/by-nc/4.0/).

## Contributors

 - [Ionuț Albu](https://github.com/runzway) ionut@artgames.ro

## Author

 - [Daniel Plăcintă](https://github.com/akizor) daniel@artgames.ro
