<?php

return [
    'categories' => [
        [
            'id' => 'all',
            'name' => 'Semua Menu',
            'icon' => 'fa-utensils'
        ],
        [
            'id' => 'coffee',
            'name' => 'Specialty Coffee',
            'icon' => 'fa-mug-hot'
        ],
        [
            'id' => 'signature',
            'name' => 'Signature Drinks',
            'icon' => 'fa-star'
        ],
        [
            'id' => 'non-coffee',
            'name' => 'Non-Coffee & Tea',
            'icon' => 'fa-glass-water'
        ],
        [
            'id' => 'main-course',
            'name' => 'Rice Bowl & Mains',
            'icon' => 'fa-bowl-rice'
        ],
        [
            'id' => 'pasta',
            'name' => 'Pasta & Western',
            'icon' => 'fa-plate-wheat'
        ],
        [
            'id' => 'snacks',
            'name' => 'Snacks & Dessert',
            'icon' => 'fa-cookie-bite'
        ]
    ],

    'items' => [
        // --- COFFEE ---
        [
            'name' => 'Americano (Ice / Hot)',
            'category' => 'coffee',
            'category_name' => 'Specialty Coffee',
            'price' => 28000,
            'description' => 'Ekstraksi ganda specialty espresso dari El\'s Coffee blend dengan air mineral murni, menghasilkan rasa clean dan fruity aromatik.',
            'badge' => 'Classic Fav',
            'is_popular' => true,
            'image' => 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Caffè Latte (Ice / Hot)',
            'category' => 'coffee',
            'category_name' => 'Specialty Coffee',
            'price' => 32000,
            'description' => 'Paduan seimbang espresso kaya rasa dengan steamed fresh milk bertekstur lembut dan lapisan microfoam halus.',
            'badge' => 'Best Seller',
            'is_popular' => true,
            'image' => 'https://images.unsplash.com/photo-1534778101976-62847782c213?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Cappuccino',
            'category' => 'coffee',
            'category_name' => 'Specialty Coffee',
            'price' => 32000,
            'description' => 'Espresso berpadu dengan susu berbusa tebal khas Italia yang ditaburi bubuk cokelat premium di atasnya.',
            'badge' => null,
            'is_popular' => false,
            'image' => 'https://images.unsplash.com/photo-1572442388796-11668a67e53d?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Manual Brew V60 Nusantara Single Origin',
            'category' => 'coffee',
            'category_name' => 'Specialty Coffee',
            'price' => 35000,
            'description' => 'Seduhan tangan V60 dengan biji kopi pilihan langsung dari roastery El\'s Coffee: Aceh Gayo, Mandheling, Toraja Kalosi, Flores Bajawa, atau Papua Wamena.',
            'badge' => 'Roaster\'s Pick',
            'is_popular' => true,
            'image' => 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Avocado Coffee Float',
            'category' => 'coffee',
            'category_name' => 'Specialty Coffee',
            'price' => 38000,
            'description' => 'Jus alpukat mentega segar berpadu dengan espresso shot berkualitas dan topping es krim vanila lembut serta siraman dark chocolate.',
            'badge' => 'Chef Choice',
            'is_popular' => false,
            'image' => 'https://images.unsplash.com/photo-1578314675249-a6910f80cc4e?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Caramel Macchiato',
            'category' => 'coffee',
            'category_name' => 'Specialty Coffee',
            'price' => 36000,
            'description' => 'Espresso dipadukan dengan vanilla syrup, steamed milk dan sentuhan gurih saus karamel panggang.',
            'badge' => null,
            'is_popular' => false,
            'image' => 'https://images.unsplash.com/photo-1485808191679-5f86510681a2?auto=format&fit=crop&w=600&q=80'
        ],

        // --- SIGNATURE DRINKS ---
        [
            'name' => 'Choco Mint Coffee',
            'category' => 'signature',
            'category_name' => 'Signature Drinks',
            'price' => 35000,
            'description' => 'Kombinasi unik signature dark chocolate khas El\'s Coffee, espresso harum, dan sensasi dingin menyegarkan dari ekstrak daun mint.',
            'badge' => 'Signature Must-Try',
            'is_popular' => true,
            'image' => 'https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Choco Salted Caramel',
            'category' => 'signature',
            'category_name' => 'Signature Drinks',
            'price' => 36000,
            'description' => 'Paduan mewah cokelat pekat dengan saus salted caramel homemade yang gurih manis memanjakan lidah.',
            'badge' => 'Signature',
            'is_popular' => true,
            'image' => 'https://images.unsplash.com/photo-1579888944880-d98341245702?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Es Kopi Susu Gula Aren Els',
            'category' => 'signature',
            'category_name' => 'Signature Drinks',
            'price' => 25000,
            'description' => 'Racikan kopi susu kekinian ala El\'s Coffee dengan gula aren organik murni dan rasa kopi yang tetap dominan dan creamy.',
            'badge' => 'Favorite WFC',
            'is_popular' => true,
            'image' => 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Irish Cream Hazelnut Latte',
            'category' => 'signature',
            'category_name' => 'Signature Drinks',
            'price' => 36000,
            'description' => 'Sentuhan aroma Irish non-alkohol berpadu dengan gurihnya kacang hazelnut panggang dan espresso mantap.',
            'badge' => null,
            'is_popular' => false,
            'image' => 'https://images.unsplash.com/photo-1517701550927-30cf4ba1dba5?auto=format&fit=crop&w=600&q=80'
        ],

        // --- NON-COFFEE ---
        [
            'name' => 'Signature Dark Chocolate',
            'category' => 'non-coffee',
            'category_name' => 'Non-Coffee & Tea',
            'price' => 32000,
            'description' => 'Cokelat hitam asli Lampung dengan citarasa pekat, creamy, dan tidak terlalu manis. Pilihan nomor satu pecinta cokelat.',
            'badge' => 'Best Seller',
            'is_popular' => true,
            'image' => 'https://images.unsplash.com/photo-1542990253-0d0f5be5f0ed?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Artisan Matcha Latte',
            'category' => 'non-coffee',
            'category_name' => 'Non-Coffee & Tea',
            'price' => 34000,
            'description' => 'Bubuk matcha murni berkualitas Jepang diseduh dengan steamed fresh milk, menghasilkan aroma earthy yang otentik.',
            'badge' => 'Favorite',
            'is_popular' => true,
            'image' => 'https://images.unsplash.com/photo-1536256263959-770b48d82b0a?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Lychee Iced Tea',
            'category' => 'non-coffee',
            'category_name' => 'Non-Coffee & Tea',
            'price' => 26000,
            'description' => 'Teh hitam pilihan yang diseduh dingin dengan sirup leci dan buah leci utuh segar yang manis meremajakan suasana.',
            'badge' => null,
            'is_popular' => false,
            'image' => 'https://images.unsplash.com/photo-1556679343-c7306c1976bc?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Berry Lemonade Fizz',
            'category' => 'non-coffee',
            'category_name' => 'Non-Coffee & Tea',
            'price' => 28000,
            'description' => 'Kombinasi sparkling soda dengan sari lemon segar, sirup mixed berries, dan daun mint yang menyegarkan dahaga siang hari.',
            'badge' => 'Refreshing',
            'is_popular' => false,
            'image' => 'https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?auto=format&fit=crop&w=600&q=80'
        ],

        // --- MAIN COURSE ---
        [
            'name' => 'Saikoro Beef Rice Bowl',
            'category' => 'main-course',
            'category_name' => 'Rice Bowl & Mains',
            'price' => 48000,
            'description' => 'Daging sapi saikoro empuk juicy yang dimasak dengan pilihan saus: Blackpepper gurih pedas atau Barbeque manis gurih, disajikan di atas nasi hangat dan telur onsen.',
            'badge' => 'Top Recommendation',
            'is_popular' => true,
            'image' => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Els Omurice with Butter Rice',
            'category' => 'main-course',
            'category_name' => 'Rice Bowl & Mains',
            'price' => 42000,
            'description' => 'Nasi mentega gurih dibalut telur dadar tornado khas Jepang yang lembut lumer, disiram saus demiglace spesial racikan El\'s Coffee.',
            'badge' => 'Customer Fav',
            'is_popular' => true,
            'image' => 'https://images.unsplash.com/photo-1604382354936-07c5d9983bd3?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Nasi Curry Chicken Katsu',
            'category' => 'main-course',
            'category_name' => 'Rice Bowl & Mains',
            'price' => 40000,
            'description' => 'Fillet ayam katsu renyah keemasan disiram saus kari Jepang kental beraroma rempah dengan wortel dan kentang lembut.',
            'badge' => null,
            'is_popular' => false,
            'image' => 'https://images.unsplash.com/photo-1625944525533-473f1a3d54e7?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Ayam Kecombrang with Butter Rice',
            'category' => 'main-course',
            'category_name' => 'Rice Bowl & Mains',
            'price' => 42000,
            'description' => 'Ayam suwir gurih beraroma bunga kecombrang wangi khas nusantara, disajikan dengan nasi mentega harum dan lalapan segar.',
            'badge' => 'Indonesian Pride',
            'is_popular' => true,
            'image' => 'https://images.unsplash.com/photo-1598515214211-89d3c73ae83b?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Els Saikoro Fried Rice',
            'category' => 'main-course',
            'category_name' => 'Rice Bowl & Mains',
            'price' => 45000,
            'description' => 'Nasi goreng bumbu spesial smokey berpadu dengan potongan daging sapi saikoro empuk, telur mata sapi, dan kerupuk renyah.',
            'badge' => 'Best Seller',
            'is_popular' => true,
            'image' => 'https://images.unsplash.com/photo-1603133872878-684f208fb84b?auto=format&fit=crop&w=600&q=80'
        ],

        // --- PASTA ---
        [
            'name' => 'Creamy Carbonara Pasta',
            'category' => 'pasta',
            'category_name' => 'Pasta & Western',
            'price' => 44000,
            'description' => 'Spaghetti al dente dengan saus krim keju parmesan gurih, smoked beef crispy, dan taburan parsley harum.',
            'badge' => 'Best Seller',
            'is_popular' => true,
            'image' => 'https://images.unsplash.com/photo-1612874742237-6526221588e3?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Spaghetti Aglio Olio Smoked Beef',
            'category' => 'pasta',
            'category_name' => 'Pasta & Western',
            'price' => 42000,
            'description' => 'Pasta yang ditumis dengan minyak zaitun extra virgin, bawang putih cincang, cabai kering, dan potongan smoked beef gurih.',
            'badge' => null,
            'is_popular' => false,
            'image' => 'https://images.unsplash.com/photo-1551183053-bf91a1d81141?auto=format&fit=crop&w=600&q=80'
        ],

        // --- SNACKS & DESSERT ---
        [
            'name' => 'Els Platter',
            'category' => 'snacks',
            'category_name' => 'Snacks & Dessert',
            'price' => 45000,
            'description' => 'Paket cemilan komplit untuk nongkrong bersama: french fries renyah, nachos renyah berkeju, chicken fingers gurih, dan onion rings keemasan.',
            'badge' => 'Sharing Fav',
            'is_popular' => true,
            'image' => 'https://images.unsplash.com/photo-1576107232684-1279f3908594?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Churros with Belgian Chocolate',
            'category' => 'snacks',
            'category_name' => 'Snacks & Dessert',
            'price' => 28000,
            'description' => 'Churros spanyol renyah di luar dan lembut di dalam, berbalut gula kayu manis harum dengan dipping saus dark chocolate leleh.',
            'badge' => 'Sweet Treat',
            'is_popular' => true,
            'image' => 'https://images.unsplash.com/photo-1624353365286-3f8d62daad51?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Choco Banana Fritter',
            'category' => 'snacks',
            'category_name' => 'Snacks & Dessert',
            'price' => 26000,
            'description' => 'Pisang goreng karamel krispi berbalut tepung renyah dengan taburan keju parut gurih dan saus cokelat melimpah.',
            'badge' => null,
            'is_popular' => false,
            'image' => 'https://images.unsplash.com/photo-1528735602780-2552fd46c7af?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'name' => 'Els Curly Corn',
            'category' => 'snacks',
            'category_name' => 'Snacks & Dessert',
            'price' => 24000,
            'description' => 'Jagung manis iris melingkar berbumbu gurih pedas manis yang digoreng garing, camilan unik teman ngopi asik.',
            'badge' => 'Unique Snack',
            'is_popular' => false,
            'image' => 'https://images.unsplash.com/photo-1551782450-a2132b4ba21d?auto=format&fit=crop&w=600&q=80'
        ],
    ]
];
