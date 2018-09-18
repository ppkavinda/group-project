<?php
use Illuminate\Database\Seeder;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::create([
            'title' => 'MAKING AN EASY, BASIC BEGINNER  SOAP INSDRUSTRY',
            'course_id' => 1,
            'body' => '<h3>Ingredients<h3>
            <ul><li>500 g extra virgin olive oil</li>
            <li>100 g coconut oil (Regular coconut oil that melts around 76ºF)</li>
            <li>10 g lavender essential oil</li>
            <li>80 g lye NaOH (Sodium hydroxide)</li>
            <li>195 g water</li></ul>
            <br>
            <h3><strong>Instructions</strong><h3>
            <p> Discuss about how to manufaturing about soap step by step</p>
<ol><li>Mix your lye into your water . Do this in a recipient that can handle heat; I used a glass bowl. It is best to do this step outside so that you do not
 fill your house with the fumes. Try not to breath them in!! Once the lye has dissolved, leave the mix to cool in an area where no kids or pets have access to it!!!</li>
<li>Meanwhile, you can weigh and mix your olive and coconut oils. I mixed them in a large, glass bowl with room for adding and mixing the other ingredients.</li>
<li>After the lye mixture has cooled a bit, bring it back inside and pour into your oil mix. Mix them together gently at first.</li>
<li>Once your lye mix has been incorporated into your oils, you can start to blend them with a hand blender. Be careful not to spray the mixture all over!!</li>
 <li>I blended mine in the bottom of my sink, and distanced myself as much as the blender would allow, just in case!! You can do this step by hand, but it supposedly will take a very long time.</li>
When your mixture starts to chicken like mayonnaise, after a few minutes, you are at the stage that is called "trace." That is what you want!!!</li>
<li>Mix in your essential oils.</li>
<li>Pour into soap molds. (I used a silicone pan and some plastic containers. It is a good idea to oil the plastic containers beforehand to prevent sticking.)</li>
<li>Cover and set aside for at least 24 hours. It will probably get warm. If you cover it with a cloth to keep the warmth in, it supposedly contributes to the quality of the soap. </li>
<li>After 24 hours, uncover and see if you can unmold it. If it is too soft, wait a few more hours and unmold. You can put it in a cold place to help shrink it a little to help the process out. Do not wait too long or it will be too hard to easily cut into bars.</li>
<li>Cut into bars. I like the look of big, chunky square-ish bars. The nice thing about making your own, is that you can decide how you want to cut them.</li>
<li>Let set for around a month, turning every day or two at first, and then every week later on. This is to let your soap dry out and harden.</li>
</ol>',
            'user_id' => 1,
            'post_image' => '/dist/img/post/post1_1.jpg',
            'description' => 'Learn all about soap manufacturing. It is easier than you think.',
        ]);
     
      
        \App\Post::create([
            'title' => 'Chilli Sauce Manufacturing',
            'course_id' => 2,
            'body' => '<h3><u>Ingredients</u></h3><br>
            <ul><li>Chilli 100g</li>
            <li>400g tomatoes</li>
            <li>Pepper 2 tablespoons tables</li>
            <li>100g onions</li>
            <li>White toddy</li>
            <li>A piece of ginger</li>
            <li>Stock Water bottles 01</li>
            <li>Vinegar 1/2 bottles</li>
            <li>Sugar little</li>
            <li>4 tablespoons of margarine tables</li>
            <li>Plum teaspoons 02</li></ul><br>
  <p>   Discuss About Prepareing chilli paste step by step       </p>
<h3><b>How to prepare</b></h3>
<ol><li>When it is first put on the jar and put the margarine on the sauce, then the red onion is dried up until the color of the wilted rhizomes is dyed until the color of the tomatoes is added
.</li>
<li>Add chilli powder to 10 pepper and flour and mix it with water and vinegar.</li>
<li>After it is well-steamed, add the sugar pepper powder and salt to taste.</li>
<li>We can sterilized  bottle and pack chili paste in to bottles.</li>
</ol>',
            'user_id' => 1,
            'post_image' => '/dist/img/post/post3_1.jpg',
            'description' => 'Learn the basics of Chilli Sauce Manufacturing. It is simple',
        ]);
        \App\Post::create([
            'title' => 'Introduction about Candles Manufacturing',
            'course_id' => 3,
            'body' => '<h3><u>Introduction</u></h3><br>
            <p>Everyone uses us as candles as a light source. Vesak, Poson and Christmas, as well as weddings and birthday parties.
            <br><br>The candle is very easy to use and can be used as a cottage industry .It can start with a very low capital and the market risk is low .Also, you can use it again without the raw material wastage.
            <br><br>Candles can be made in a variety of shapes and colors .They are also made to suit different festivities.
            <br><br>The raw materials used in the production of candles are perfumes wax. This is a side effect of the production of petroleum, and there are two types of wines made up of both Malaysian and Indonesian. Malaysian wax is white and it is best suited to this industry.
            <br><br><br>In addition, Stearic Acid is used as an ingredient .These can be purchased as a thick dye and peas. Stearic acid is added to the candle for high diameters, forcing candles to strengthen in order not to drag, transparent or overwhelm. For most diameters of candles, Stearic acid is not indispensable.
            <br><br>This is an easy-to-use technique, so anyone can reach the candle production and enhance high-end earning revenue through various events.
            
            </p>',
            'user_id' => 1,
            'post_image' => '/dist/img/post/post4_1.jpg',
            'description' => 'The candle is very easy to use and can be used as a cottage industry. In this post you will learn all about candels manufacturing. '
        ]);
         \App\Post::create([
            'title' => 'The current market nature  for candles',
            'course_id' => 3,
            'body' => '
            <p>There is a great demand for candles during festive seasons such as Vesak, Poson and Christmas. At other times there is a normal market.
            <br><br> Ornamental candles are used for various festive events. These are good demand throughout the year for year.
            </p>
            ',
            'user_id' => 1,
            'post_image' => '/dist/img/post/post4_2.jpg',
            'description' => 'There is a great demand for candles during festive seasons such as Vesak, Poson and Christmas. Learn about candles here.',
        ]);
        \App\Post::create([
            'title' => 'Before the onset of candles',
            'course_id' => 3,
            'body' => '
            <h3>The required ingredients</h3> 
              <ul><li>Paraffin Wax</li>
                <li>Stearic Acid</li>
                <li> Cotton thread -the diameter of the candle and the diameter of the diamond knot, using the diameter of the hole in the mold</li>
                <li>Pigment - Dice, pastal colored sticks</li>
                <li>Aroma (if desired) - citric oils and other substances</li>
                <li> Wax colourants</li></ul>
               <p>   After painting the candles, it is important to paint the outside
            
            </p>
            ',
            'user_id' => 1,
            'post_image' => '/dist/img/post/post4_3.jpg',
            'description' => 'There is a great demand for candles during festive seasons such as Vesak, Poson and Christmas. learn about candles.'
        ]);
        \App\Post::create([
            'title' => 'Requried Equipment for manufacturing',
            'course_id' => 3,
            'body' => '
            <h3>Equipment for manufacturing</h3>
            <ul><li> Candles of mold</li></ul>
            <br><br>
            <p>
            Industrial castings produce aluminum or galvanized molds. Lightweight, non-stainless steel, liquidable at low temperature, well-heat-conveying
            Aluminum metal is suitable for making molds</p>
        
            
            <br>
            <ul>
            </li>Molds</li>
                 <ul>
                    <li>Holes 20 buckets molds</li>
            
                     <li>Holes 40 buckets molds</li>
                </ul>
            <br>
            Fancy candles (Christmas tree, Aralia, Cranran flower) also uses silicon dyes according to modern technology .Also, molds can be made according to any model.
             <br>
            <li>Double wall boiler (because the boiling point of the parching wax burns up because of the fire and boils bitter bitters instead of the wall)</li>
            <li>Wooden shelf</i>
            <li>Furnace</li>
            <li>Scissors / knife</li>
            </ul>
            
             ',
            'user_id' => 1,
            'post_image' => '/dist/img/post/post4_4.jpg',
            'description' => 'A candle is an ignitable wick embedded in wax, or another flammable solid substance such as tallow, that provides light, and in some cases, a fragrance.'
        ]);
        
        \App\Post::create([
            'title' => 'Production method',
            'course_id' => 3,
            'body' => '
            <p>First of all, paraffin wax, Stearic acid should be anodized as needed .Steric Acid weight can be applied to a minimum of 3% and a maximum of 10% by weight.
             That is 1kg of wax 20 g-`100g for one wax.</p>
             <br>
             Boil the steamed paraffin wax, Stearic acid double boiler system. If there is no double boiler, a boiling water can be poured into a boiling water, 
             then it is possible to dissolve an aluminum coil (with a coil with a coil) and add it to the wax mixture.
             <br>
             Add wax to the wax as it needs to be mixed. Make sure that it is small in size.
             Now put on the molds and put it in the proper way. Put the wax into molds.
             <br>
             If the last thickness lasts about 1/2 hours, remove the candle carefully after cutting the thread. 
              Now, they can be delivered to the market as appropriate.
             
            
            ',
            'user_id' => 1,
            'post_image' => '/dist/img/post/post4_5.jpg',
            'description' => 'A candle is an ignitable wick embedded in wax, or another flammable solid substance such as tallow, that provides light, and in some cases, a fragrance. You can easily start a candle shop.',
        ]);

        \App\Post::create([
            'title' => 'chili sauce',
            'body' => '<div class="page-title" id="ph-title" style="margin: 0px 0px 10px; outline: none; padding: 6px 10px; min-height: 50px; border-bottom: 1px solid rgb(221, 221, 221); color: rgb(68, 68, 68); font-family: Arial, Helvetica, sans-serif; font-size: 14px;"><h1 style="outline: none; padding: 0px; color: rgb(68, 68, 68); font-size: 30px;">Chilli Sauce Recipes</h1><div class="page-body" style="margin: 0px; outline: none; padding: 0px; text-align: justify; line-height: 22px; color: rgb(68, 68, 68); font-family: Arial, Helvetica, sans-serif; font-size: 14px;"><p style="margin-top: 10px; margin-bottom: 10px; outline: none; padding: 0px;">The process of making your own sauce will teach you a lot about the sauces you can buy, not least the work that goes into them, but also about the impact that the various ingredients have on the final flavor. All that said, just have fun!</p><p style="text-align: center; margin-top: 10px; margin-bottom: 10px; outline: none; padding: 0px;"><img data-filename="chillipaste.png" style="width: 320px;" src="/dist/img/posts/15371068850.png"><br></p><p style="margin-top: 10px; margin-bottom: 10px; outline: none; padding: 0px;">If you\'re a regular user of&nbsp;<a href="https://www.chilliworld.com/hot-chilli-sauce" style="margin: 0px; outline: none; padding: 0px; text-decoration-line: underline; color: inherit; cursor: pointer;">hot chilli sauce</a>&nbsp;or like to experiment you\'ll know that the taste of sauces varies greatly, based not least on where in the world the originate. We\'ve put together a starting list of sauce recipes from which you can select your favourite style of sauce or, if you\'re up for it, work your way through the lot!</p><p style="margin-top: 10px; margin-bottom: 10px; outline: none; padding: 0px;"><b style="margin: 0px; outline: none; padding: 0px;"><a name="Handling_Hot_Peppers" style="margin: 0px; outline: none; padding: 0px; text-decoration-line: underline; cursor: pointer;">Attention:</a></b>&nbsp;Take precautions when handling hot peppers. Many peppers will have a burning effect on sensitive skin or sensitive areas of the body, particularly the eyes. When handling hot peppers it is best to wear latex kitchen gloves. If you don\'t have these rub some olive oil into your hands. Whatever you do, DO NOT touch your eyes or face while handling hot peppers. When you are finished, discard gloves if you are using them and wash your hands with soap and water.</p><table width="100%" border="0" cellspacing="4" cellpadding="0" style="margin: 0px; outline: none; padding: 0px; width: 876px;"><tbody style="margin: 0px; outline: none; padding: 0px;"><tr style="margin: 0px; outline: none; padding: 0px;"><td style="margin: 0px; outline: none; padding: 0px;">&nbsp;</td></tr><tr style="margin: 0px; outline: none; padding: 0px;"><td style="margin: 0px; outline: none; padding: 0px;"><table width="100%" border="0" cellspacing="4" cellpadding="0" style="margin: 0px; outline: none; padding: 0px; width: 876px;"><tbody style="margin: 0px; outline: none; padding: 0px;"><tr style="margin: 0px; outline: none; padding: 0px;"><td style="margin: 0px; outline: none; padding: 0px;"><a href="https://www.chilliworld.com/factfile/chilli-sauce-recipes/african-hot-sauce" style="margin: 0px; outline: none; padding: 0px; text-decoration-line: underline; color: inherit; cursor: pointer;">African Hot Sauce</a></td></tr><tr style="margin: 0px; outline: none; padding: 0px;"><td style="margin: 0px; outline: none; padding: 0px;"><a href="https://www.chilliworld.com/factfile/chilli-sauce-recipes/bajan-seasoning-hot-sauce" style="margin: 0px; outline: none; padding: 0px; text-decoration-line: underline; color: inherit; cursor: pointer;">Bajan Seasoning Hot Sauce</a></td></tr><tr style="margin: 0px; outline: none; padding: 0px;"><td style="margin: 0px; outline: none; padding: 0px;"><a href="https://www.chilliworld.com/factfile/chilli-sauce-recipes/belizean-habanero-sauce" style="margin: 0px; outline: none; padding: 0px; text-decoration-line: underline; color: inherit; cursor: pointer;">Belizean Style Habanero Sauce</a></td></tr><tr style="margin: 0px; outline: none; padding: 0px;"><td style="margin: 0px; outline: none; padding: 0px;"><a href="https://www.chilliworld.com/factfile/chilli-sauce-recipes/harissa-hot-sauce" style="margin: 0px; outline: none; padding: 0px; text-decoration-line: underline; color: inherit; cursor: pointer;">Harissa Style Hot Sauce</a></td></tr><tr style="margin: 0px; outline: none; padding: 0px;"><td style="margin: 0px; outline: none; padding: 0px;"><a href="https://www.chilliworld.com/factfile/chilli-sauce-recipes/mexican-style-fruity-sauce" style="margin: 0px; outline: none; padding: 0px; text-decoration-line: underline; color: inherit; cursor: pointer;">Mexican Style Fruity Sauce</a></td></tr><tr style="margin: 0px; outline: none; padding: 0px;"><td style="margin: 0px; outline: none; padding: 0px;"><a href="https://www.chilliworld.com/factfile/chilli-sauce-recipes/piri-piri-sauce" style="margin: 0px; outline: none; padding: 0px; text-decoration-line: underline; color: inherit; cursor: pointer;">Piri-Piri Sauce</a></td></tr><tr style="margin: 0px; outline: none; padding: 0px;"><td style="margin: 0px; outline: none; padding: 0px;"><a href="https://www.chilliworld.com/factfile/chilli-sauce-recipes/thai-sweet-chilli-sauce" style="margin: 0px; outline: none; padding: 0px; text-decoration-line: underline; color: inherit; cursor: pointer;">Thai Sweet Chilli Sauce</a></td></tr><tr style="margin: 0px; outline: none; padding: 0px;"><td style="margin: 0px; outline: none; padding: 0px;">&nbsp;</td></tr><tr style="margin: 0px; outline: none; padding: 0px;"><td style="margin: 0px; outline: none; padding: 0px;">and why not try</td></tr><tr style="margin: 0px; outline: none; padding: 0px;"><td style="margin: 0px; outline: none; padding: 0px;"><a href="https://www.chilliworld.com/factfile/chilli-sauce-recipes/mama-jacqs-sweet-and-spicy-hot-wings" style="margin: 0px; outline: none; padding: 0px; text-decoration-line: underline; color: inherit; cursor: pointer;">Mama Jacq\'s Sweet and Spicy Hot Wings</a></td></tr></tbody></table></td></tr><tr style="margin: 0px; outline: none; padding: 0px;"><td style="margin: 0px; outline: none; padding: 0px;">&nbsp;</td></tr></tbody></table><center><iframe width="560" height="315" src="https://www.youtube.com/embed/zb2IVK2A_QI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center><p style="margin-top: 10px; margin-bottom: 10px; outline: none; padding: 0px;">Feel free to email us with your stories and experiences of creating your own sauces and any additional information you think might be useful to fellow sauce brewers. The all important chillies, add a few ingredients and a shake of magic and Hey Presto! This is the best way to learn about sauces and what makes them happen. One thing\'s for sure, you\'ll appreciate all the work that goes into some of the great tasting commercial brands.</p></div></div>',
            'description' => 'The process of making your own sauce will teach you a lot about the sauces you can buy, not least the work that goes into them, but also about the impact that the various ingredients have on the final flavor. All that said, just have fun!',
            'course_id' => 2,
            'user_id' => 1,
            'post_image' => '/dist/img/post/post4_5.jpg',
        ]);
    }
}

