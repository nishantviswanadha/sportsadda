//----------------------------------------------------------------
// store (contains the products)
//
// NOTE: nutritional info from http://www.cspinet.org/images/fruitcha.jpg
// score legend:
// 0: below 5% of daily value (DV)
// 1: 5-10% DV
// 2: 10-20% DV
// 3: 20-40% DV
// 4: above 40% DV
//
function store() {
    this.products = [
        new product("APL", "Veg Burger", "", 12, 90, 0, 2, 0, 1, 2),
        new product("AVC", "Veg Roll", "", 16, 90, 0, 1, 1, 1, 2),
        new product("BAN", "Veg Puf"," ", 4, 120, 0, 2, 1, 2, 2),
        new product("CTP", "French Fries", "", 3, 50, 4, 4, 1, 2, 0),
        new product("FIG", "Veg Noodles", "", 10, 100, 0, 0, 0, 1, 2),
        
	];
    this.dvaCaption = [
        "Negligible",
        "Low",
        "Average",
        "Good",
        "Great"
    ];
    this.dvaRange = [
        "below 5%",
        "between 5 and 10%",
        "between 10 and 20%",
        "between 20 and 40%",
        "above 40%"
    ];
}
store.prototype.getProduct = function (sku) {
    for (var i = 0; i < this.products.length; i++) {
        if (this.products[i].sku == sku)
            return this.products[i];
    }
    return null;
}
