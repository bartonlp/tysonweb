<?php
// BLP 2021-01-31 -- edited

$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
$S = new $_site->className($_site);

$h->title = "Tyson Group";
$h->desc = "Tyson Group";

$h->css = <<<EOF
<style>
.list { list-style-type: disc; }
.list li { margin-bottom: 10px; }
</style>
EOF;
list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<h1 class="center">Dining Out in New Bern</h1>

<hr>
<p><b>LIST OF NEW BERN AREA RESTAURANTS IN ALPHABETICAL ORDER</b></p>
<ul class="list">
<li>ANNABELLE'S  3100 MLK Blvd., Inside Twin Rivers Mall.<br />
Victorian Nouveau atmosphere. Prime rib dinner or sandwich, chef salad, 
fettuccine, hamburger, French silk pie, this restaurant has it all, 
especially the ribs and fajitas are good.</li>
<li>APPLEBEE'S 3450 MLK Blvd.<br>
A well-known franchise. Ribs, burgers, 
all the fancy salads you could dream of. Pastas especially varied. Quesadillas 
the best. Desserts yummy! Drink specialties every day. Service slow. Take a 
date.</li>

<li>ARTURO'S 1906 S. Glenburnie Rd.<br>
<i>Hola, muchachos!</i> The Mexican restaurant is packing them 
in! Entertainment on weekends. Prices reasonable, menu very extensive, 
service improving, food good.

<li>BAKER'S KITCHEN 227 Middle St.<br>
You'll love this home cooking specialist. Wonderful smothered 
pork chops and fried chicken with all the trimmings, homemade breads, homemade 
desserts. Specials every day, try the Dutch potatoes as a side dish or the 
fried sweet potato strips. Breakfasts great, with the homemade bread toasted! 
Yum!

<li>CAROLINA BAGEL 3601 Trent Rd.<br>
Where the New Bern elite 
meet to greet and eat. Packs 'em in and only the limited space holds it back. 
You'll love breakfasts there, you can get the works (even pancakes), or their 
homemade gourmet bagels and muffins with a variety of cream cheese flavors. 
Lunch is terrific too.

<li>CAPTAIN RATTY'S Corner 202 Middle St.<br>
Ratty's is a restaurant/oyster bar in the best location in town. Upstairs is 
a piano bar with live entertainment several nights a week, and rootop dining is available when weather permits. It has become the 
&quot;in&quot; place to relax and take visiting friends. World's best clam 
chowder! PS, the filet is the best we've ever had. Somewhat pricey 
but fun. Phone: (252)633-2088

<li>CYPRESS HALL 219 Middle St.<br>
Upscale dinning experience in a beautiful historic building.

<li>THE CHELSEA 335 Middle St.<br>
Really great location, for after sightseeing, features better-than-good special every day, 
brand new terrific menu. We consider it the best in town. Wonderful lunch 
menu, dinners are packed on weekends, call for reservations. Our all-time 
favorite. Can take groups if you call ahead. Opulent New Bern 1920's style 
atmosphere. Upbeat.

<li>CHINA GARDEN 2016 Glenburnie Rd.<br>
Great buffet. Small place, spotless. friendly staff; you'll love it. When thinking of good 
Chinese food, order from the menu.

<li>COW CAFE 319 Middle St.<br>
Kids of all ages, including adults, love this home-made ice cream factory. Flavors range from the 
ever-popular Moonilla to Chocolate CowPie! A New Bern icon, you can watch the 
ice cream being made while you chomp. South's best barbecue is offered here, the 
famed Raymond's brand. Nowhere else in the eastern NC has this pork 
delectable. Lunches with chicken, burgers and dogs salads too.
Holstein-themed, even the stools have udders! You'll love the fun.

<li>EL CERRO GRANDE 2503 MLK Blvd..<br>
The number 2 in Mexican food 
now. Small place, tasty and huge servings. <i>Aqui se habla espanol, y hay 
chimichangas y burritos extraordinarios!</i>

<li>FRIDAY'S 2307 Neuse Blvd.<br>
Fried seafood and the usual Carolina 
BBQ; may be the oldest seafood place in town. This old gal is showing her 
wrinkles, but the food is pretty darned good. Lots of it.

<li>FAMOUS SUBS AND PIZZA  2210 Neuse Blvd.<br>
The name says it 
all. It's known for the subs. Pizza is also a winner. Lunch 
and dinner specials. Old-time New Bernians have always loved this place with its own special spaghetti sauce. Greek or Italian style. Nice 
atmosphere. There is also a top-notch bakery attached.

<li>INTERNATIONAL HOUSE OF PANCAKES(IHOP) 3400 MLK Blvd..<br>
A calorie lover's dream for breakfast. The votes are still out on lunch and dinner.

<li>THE KITCHEN ON TRENT 2500 Trent Rd.<br>
Here's a great place to eat, 
especially if you want healthy choices. Warm, welcoming, the chicken salad is 
to die for. Nothing fried. You'll like their style; low-fat choices are super. 
Desserts, breakfast goodies, must try.

<li>MOORE'S BARBECUE 3521 MLK Blvd..<br>
If you haven't tried barbecue North Carolina-style, this is 
the place to start. Don't expect beef slabs with tomato sauce, that's not their 
way. Shredded pork is the only TRUE barbecue. Fried shrimp sandwich also a good 
choice. No frills, (to understate the case). Try the shrimp and 
fish platters. Moore's serves food, not fancy. It's an eatin' place, period. 

<li>MORGAN'S 235 Craven St.<br> 
Steak and fine dining restaurant on 
Craven St. with outstanding cuisine. Lobster bisque to die for! Parking lot on 
the left a real plus. Charming decor takes advantage of the old building with 
raw brick walls here and there. These folks know their business.

<li>MJ'S RAW BAR 216 Middle St.<br>
Understated decor, set up for eatin' 
the goodstuff. Crabcakes tasty. Little Neck clams, Lots of creative specials. 
Middle St. is becoming the gourmet eaters' paradise.

<li>MUSASHI 2041 S. Glenburnie Rd.<br>
Japanese steak and seafood. Good theater and a fun atmosphere. Very heavy on the 
veggies here; a nice night out but hard to find for out-of-towners.

<li>OUTBACK STEAKHOUSE 111 Howell Rd.<br>
What can you say? It's the best. Coconut shrimp is 
at least as good as the steaks and the chops. The absolute best pork chops 
anywhere!

<li>PAULA'S ITALIAN RESTERANT AND PIZZA 3946 MLK Blvd..<br>
Great pizza, and other Italian specialties. They seem to have their ducks in 
the proverbial row, salads are ho-hum. Good food, fast service, friendly 
personnel. Seniors delight with reasonably 
priced entrees. Voted best pizza in town.

<li>37th ST. PIZZERIA Neuse Blvd. 2402 Nuese Blvd.<br>
Old-timer, with a late bar scene, Italian food and more Italian food. Iif you're not hungry 
for delicious old-style Italian, go elsewhere. Good lunch menu, calzones a 
specialty. Pizza really tasty. Draft beer and wine. Delivery.

<li>RUBY TUESDAY 1004 US-70.<br>
Salad bar extraordinaire. You know the drill with this popular franchise.

<li>SCHLOTZSKY'S DELI 3335 MLK Blvd..<br>
Steve's favorite place to eat. Try lunch here with the Original sandwich, founded in Austin TX. You'll 
be satisfied and immediately decide to come back and try other things. Our 
favorite: those little pizzas. New sandwiches on the menu; don't pass up the Reubens.

<li>SPUNKY McDOOGLE 1980 S. Glenburnie Rd.<br>
Short orders done right. Ask for the macaroni and cheese 
casserole. Great neighborhood homey place, with a friendly bar, offering good food and service.

<li>SUPER CHINA BUFFET 2000 S Glenburnie Rd.<br>
Small franchise, catering to the &quot;eat-it-all-at-one-setting&quot; crowd.
Mega choices, from pizza to whatever. The Chinese choices abound,
caters to the gourmand's tastebuds. You can get absolutely anything the crowd wants.

<li>KINGDOM THAI AND SUSHiI 2405 Neuse Blvd.<br>
WOW! we love this one. Authentic Thai cuisine, 
with a light hand on the spices for the American palate, this is a winner. 
Nice atmosphere, Thai wait staff with manners and charm; this offers a fine 
dining experience.

<li>THAI ANGEL 247 Craven St.<br>
Fantastic Thai cuisine.

<li>WAFFLE HOUSE 3303 MLK Blvd..<br>
Doing that voo-doo that they do so-o-o-o 
well, with all that great cholesterol.

<li>Other local franchises not to miss include:  
ANDY'S 3200 MLK Blvd..<br>
Absolute best cheese-steak and orangeades anywhere.

<li>SONIC 3510 MLK Blvd.<br>
A 1950s drive-in fix

<li>BOJANGLES 3770 MLK Blvd.<br>  
Spicy fried chicken and lots of fixings.
</ul>

<hr>
$footer
EOF;
