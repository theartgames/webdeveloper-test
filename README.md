Art Games Test
=
**You have**

 - data.json which contains a product list (fields described below)
 - EURO as currency for price fields ( &euro; )
 - index.php as entry point
 - daniel@artgames.ro as additional help information

**You can**

 - Add any .css/.js file you want
 - Import or use any libraries you want as long as you add reference to them
 - Use any of the following languages: JS, PHP, Python
 - Make errors
 - Be creative

**Required tasks**

 - [ ] Build a search script that traverse data.json and returns search results based on input
 - [ ] Build a basic interface (HTML/CSS) that uses the script above and outputs results

**Optional tasks** earns extra XP points here

 - [ ] Build or use an advanced searching algorithm
 - [ ] Search script still returns results even if you have spelling errors
 - [ ] Search script returns related results if nothing is found for user's input
 - [ ] Interface has working filters based on fields
 - [ ] Interface has working sorting options
 - [ ] Search and show results without leaving or refreshing the page
 - [ ] Store user's recent searches

**data.json Fields explanation**

 - *aname*
	 - (string) Artist Name (you can treat it as manufacturer/brand)
 - *pname*
	 - (string) Product Name
 - *pdesc*
	 - (string) Product Description
 - *psdesc*
	 - (string) Product Short Description
 - *sku*
	 - (string) Product Code
 - *url*
	 - (string) Product URL
 - *img*, *img_**
	 - (string) Product main image with various dimensions
 - *all_images*
	 - (array) all product images listed as array
 - *lot_nr*
	 - (numeric) Lot number (you can treat it as ordering number)
 - *lot_emin*
	 - (numeric) Informative price meaning "Minimum Estimate"
 - *lot_emax*
	 - (numeric) Informative price meaning "Maximum Estimate"
 - *lot_est*
	 - (string) Concatenation of lot_emin and lot_emax
 - *auction*
	 - (string) Product category
