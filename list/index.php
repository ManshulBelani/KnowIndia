<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Moving Boxes Menu with jQuery</title>
		<meta charset=utf-8>
        <meta name="description" content="Moving Boxes Menu with jQuery" />
        <meta name="keywords" content="jquery, boxes, menu, rotating, content, background image, full page"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Astloch:regular,bold' rel='stylesheet' type='text/css' />
		<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
    </head>
    <body>
		<div id="mb_background" class="mb_background">
			<img class="mb_bgimage" src="images/small/default1.jpg" alt="Background"/>
			<div class="mb_overlay"></div>
			<div class="mb_loading"></div>
		</div>
		<div id="mb_pattern" class="mb_pattern"></div>
		<div class="mb_heading">
			<h1>List Of Monuments</h1>
		</div>
		<div id="mb_menu" class="mb_menu">
			<a href="#" data-speed="1000" data-easing="easeOutBack">Agra Fort</a>
			<!--<a href="#" data-speed="1000" data-easing="easeInExpo">Ajanta Caves</a>-->
			<a href="#" data-speed="1000" data-easing="easeOutBack">Ellora Caves</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Taj Mahal</a>
            <a href="#" data-speed="1000" data-easing="easeInExpo">Sun Temple</a>

            <!--<a href="#" data-speed="1000" data-easing="easeOutBack">The Jantar Mantar</a>-->
			<a href="#" data-speed="1000" data-easing="easeInExpo">Red Fort Complex</a>
			<!--<a href="#" data-speed="1000" data-easing="easeOutBack">Humayun's Tomb</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Elephanta Caves</a>
            <a href="#" data-speed="1000" data-easing="easeInExpo">Fatehpur Sikri</a>-->

		</div>
		<div id="mb_content_wrapper" class="mb_content_wrapper">
			<span class="mb_close"></span>
			<div class="mb_content">
				<h2>Description</h2>
				<div class="mb_content_inner">
                
                
					<ul id="mb_imagelist" class="mb_imagelist">
						<li><img src="images/small/agrafort1.jpg" alt="image1" data-bgimg="images/agrafort.jpg"/></li>
						<!--<li><img src="images/small/af2.jpg" alt="image2" data-bgimg="images/image2.jpg"/></li>
						<li><img src="images/small/af3.jpg" alt="image3" data-bgimg="images/image3.jpg"/></li>
						<li><img src="images/small/af4.jpg" alt="image4" data-bgimg="images/image4.jpg"/></li>
						-->
					</ul><br>
					<p>The Red Fort and the Taj Mahal bear an exceptional and complementary testimony to a civilization which has disappeared, that of the Mogul Emperors. Agra's history goes back more than 2,500 years, but it was not until the reign of the Mughals that Agra became more than a provincial city. Humayun, son of the founder of the Mogul Empire, was offered jewellery and precious stones by the family of the Raja of Gwalior, one of them the famous Koh-i-Noor. The heyday of Agra came with the reign of Humayun's son, Akbar the Great. During his reign, the main part of the Agra Fort was built.</p><br>


					<p>The Red Fort of Agra is a powerful fortress founded in 1565 by the Emperor Akbar (1556-1605) on the right bank of the Yamuna; it is placed today on the north-west extremity of the Shah Jahan Gardens which surround the Taj Mahal and clearly form, with them, a monumental unity.</p><br>
					<p>This bastioned fortress, with walls of red sandstone rising above a moat and interrupted by graceful curves and lofty bastions, encompasses within its enclosure walls of 2.5 km, the imperial city of the Mogul rulers. Like the Delhi Fort, that of Agra is one of the most obvious symbols of the Mogul grandeur which asserted itself under Akbar, Jahangir and Shah Jahan.</p><br>
					<p>The wall has two gates, the Delhi Gate and the Amar Singh Gate. The original and grandest entrance was through the Delhi Gate, which leads to the inner portal called the Hathi Pol or Elephant Gate. But now the entrance to the fort is only through the Amar Singh Gate.
The citadel comprises a large number of fairy-like palaces: the Khas Mahal, the Shish Mahal, the octagonal tower of Muhammam Burj, as well as reception rooms: Diwan-i-Khas, built in 1637 and the many pillared Diwan-i-Am (Hall of Public Audience), constructed in 1628, under the reign of the luxury-loving Shah Jahan (1630-55). Within the palatial complex, there are two very beautiful mosques of white marble, the Moti Masjid or the Pearl Mosque, constructed in 1646-53 by Shah Jahan and the Nagina Masjid built under the reign of Aurangzeb (1658-1707).</p><br>
                     <p>Several of the buildings are made from pure marble with beautiful carvings; all of these monuments mark the apogee of an Indo-Muslim art strongly marked by influences from Persia which already manifested itself in Timurid art.
Emperor Shah Jahan, who built the Taj Mahal, was imprisoned by his son Aurangzeb in Agra Fort, from which he had a view of the building erected for his deceased wife. Shah Jahan is said to have died in the Musamman Burj, a tower with a beautiful marble balcony.</p>

				</div>
			</div>
			<!--<div class="mb_content">
				<h2>Description</h2>
				<div class="mb_content_inner">
                <ul id="mb_imagelist" class="mb_imagelist">
						<li><img src="images/small/ac1.jpg" alt="image1" data-bgimg="images/image1.jpg"/></li>
						<li><img src="images/small/ac2.jpg" alt="image2" data-bgimg="images/image2.jpg"/></li>
						<li><img src="images/small/ac3.jpg" alt="image3" data-bgimg="images/image3.jpg"/></li>
						<li><img src="images/small/ac4.jpg" alt="image4" data-bgimg="images/image4.jpg"/></li>
						
					</ul><br>
					<p>The style of Ajanta has exerted a considerable influence in India and elsewhere, extending, in particular, to Java. With its two groups of monuments corresponding to two important moments in Indian history, the Ajanta cave ensemble bears exceptional testimony to the evolution of Indian art, as well as to the determining role of the Buddhist community, intellectual and religious foyers, schools and reception centres in the India of the Gupta and their immediate successors.</p><br>
					
					<p>The caves are situated 100 km north-east of Ellora, 104 km from Aurangabad and 52 km from Jalgaon Railway Station. They are cut into the volcanic lava of the Deccan in the forest ravines of the Sahyadri Hills and are set in beautiful sylvan surroundings. These magnificent caves containing carvings that depict the life of Buddha, and their carvings and sculptures are considered to be the beginning of classical Indian art.</p><br>
					<p>The 29 caves were excavated beginning around 200 BC, but they were abandoned in AD 650 in favour of Ellora. Five of the caves were temples and 24 were monasteries, thought to have been occupied by some 200 monks and artisans. The Ajanta Caves were gradually forgotten until their 'rediscovery' by a British tiger-hunting party in 1819.</p><br>
					<p>The Ajanta site comprises thirty caves cut into the side of a cliff which rises above a meander in the Waghora River. Today the caves are reached by a road which runs along a terrace mid-way up the cliff, but each cave was once linked by a stairway to the edge of the water. This is a Buddhist community, comprising five sanctuaries or Chaitya-grihas (caves 9, 10, 19, 26 and 29) and monastic complex sangharamas or viharas. A first group of caves was created in the 2nd century BC: the chaitya-grihas open into the rock wall by doorways surmounted by a horse-shoe shaped bay. The ground plan is a basilical one: piers separate the principal nave from the side aisles which join in the apsis to permit the ritual circumambulation behind the (commemorative monument). This rupestral architecture scrupulously reproduces the forms and elements visible in wooden constructions.</p><br>
					<p>A second group of caves was created at a later date, the 5th and 6th centuries AD, during the Gupta and post-Gupta periods. These caves were excavated during the supremacy of the Vakatakas and Guptas. According to inscriptions, Varahadeva, the minister of the Vakataka king, Harishena (c. AD 475-500), dedicated Cave 16 to the Buddhist sangha while Cave 17 was the gift of the prince, a feudatory. An inscription records that the Buddha image in Cave 4 was the gift of some Abhayanandi who hailed from Mathura.</p><br>
                    <p>The earlier architectural formulas were re-employed but treated in an infinitely richer and more ample manner. The decoration attained, at this time, an unequalled splendour: the statuary is numerous (it was already permissible to represent Buddha as a human; these representations are found both on the facades and in the interior). Finally, the wall painting, profuse and sensitive, constitutes, no doubt, the most striking artistic achievement of Ajanta.</p><br>
                    <p>Under the impulse of the Gupta dynasty, Indian art in effect reached its apogee. The Ajanta Caves are generally decorated with painted or sculpted figures of supple form and classic balance with which the name of the dynasty has remained synonymous. The refined lightness of the decoration, the balance of the compositions, the marvellous beauty of the feminine figures place the paintings of Ajanta among the major achievements of the Gupta and post-Gupta style and confer on them the ranking of a masterpiece of universal pictorial art.</p>
				</div>
			</div>-->
			<div class="mb_content">
				<h2>Description</h2>
				<div class="mb_content_inner">
                
                <ul id="mb_imagelist" class="mb_imagelist">
						<li><img src="images/small/ellora1.jpg" alt="image1" data-bgimg="images/ellora.jpg"/></li>
						<!--<li><img src="images/small/ell2.jpg" alt="image2" data-bgimg="images/image2.jpg"/></li>
						<li><img src="images/small/ell3.jpg" alt="image3" data-bgimg="images/image3.jpg"/></li>
						<li><img src="images/small/ell4.jpg" alt="image4" data-bgimg="images/image4.jpg"/></li>-->
						
					</ul><br>
					<p>The Ellora Caves not only bear witness to three great religions (Buddhism, Brahminism and Jainism) but they also illustrate the spirit of tolerance, characteristic of ancient India, which permitted these three religions to establish their sanctuaries and their communities in a single place, which thus served to reinforce its universal value. The caves, with their uninterrupted sequence of from 600 to 1,000 monuments, bring to life again the civilization of ancient India.</p><br>
					<p>These 34 monasteries and temples, extending over more than 2 km, were dug side by side in the wall of a high basalt cliff, not far from Aurangabad, in Maharashtra. Ellora, with its uninterrupted sequence of monuments dating from AD 600 to 1000, brings the civilization of ancient India to life. Not only is the Ellora complex a unique artistic creation and a technological exploit but, with its sanctuaries devoted to Buddhism, Hinduism and Jainism, it illustrates the spirit of tolerance that was characteristic of ancient India.</p><br>
					<p>This rupestral ensemble constitute one of the most beautiful expressions of the art of the Indian Middle Ages; they are noteworthy as three major Indian religions have laid joint claim to the caves peacefully since they were created. These breathtaking caves are definitely worth visiting for their remarkable reliefs, sculptures and architecture. It is not, like that of Ajanta, the expression of a single belief; rather it is the product of the three principal religions of ancient India.</p><br>
					<p>Progressing from south to north along the cliff, one discovers successively the twelve caves of the Buddhist group, which appear to be the oldest (between c. 600 and 800) and comprise monasteries and a single large temple (cave 10); then the caves of the Brahmin group (c. 600 to 900) which are no doubt the best known of Ellora with the 'Cavern of the Ten Avatars' (cave 15) and especially the Kailasha Temple (cave 16), an enormous complex, most likely undertaken during the reign of Krishna I (757-83); and, finally, the Jain group (caves 30-34) whose sanctuaries were created by the sect of the Digambara towards AD 800-1000, The Jain caves, the last to be excavated, drew their inspiration from the art already existing at Ellora: cave 32 recalls by certain of its dispositions the Kailasha Temple.</p><br>
                    <p>The Buddhist Caves were excavated between the 5th and the 7th centuries AD, when the Mahayana sects were flourishing in the region; among these cave 5 is the largest. Cave 10 is a chaitya hall and is popularly known as 'Visvakarma'. It has a highly ornamental facade provided with a gallery and in the chaitya hall there is a beautiful image of Buddha set on a stupa. The historical value of cave 12 or Tin Tala lies in the fact that human hands built a three-storeyed building from rock with such painstaking skill that even the floors and the ceiling are smooth and levelled. Tin Tala cave is a monastery-cum-chapel, with cells. It dates to the Rashtrakuta period in the mid-8th century.</p><br>
                    <p>The Brahmin caves are mostly Saivite. Kailasa (cave 16) is a remarkable example of rock-cut temples in India on account of its striking proportion; elaborate workmanship architectural content and sculptural ornamentation. It is said that cave 16 have been started by the Rashtrakuta king, Krishna I, and it is dedicated to Shiva and named after his mountain home in the Himalaya, the snow-peak Kailasa. The whole temple consists of a shrine with lingam at the rear of the hall with Dravidian sikhara, a flat-roofed mandapa supported by sixteen pillars, a separate porch for Nandi surrounded by an open court entered through a low gopura. The grand sculpture of Ravana attempting to lift Mount Kailasa, the abode of Siva, with his full might is a landmark in Indian art.</p><br>
                    <p>The Jain Caves are massive, well-proportioned, decorated and mark the last phase of the activity at Ellora.</p><br>
				</div>
			</div>
			<div class="mb_content">
				<h2>Description</h2>
				<div class="mb_content_inner">
					 <ul id="mb_imagelist" class="mb_imagelist">
						<li><img src="images/small/taj.jpg" alt="image1" data-bgimg="images/taj1.jpg"/></li>
						<!--<li><img src="images/small/tm2.jpg" alt="image2" data-bgimg="images/image2.jpg"/></li>
						<li><img src="images/small/tm3.jpg" alt="image3" data-bgimg="images/image3.jpg"/></li>
						<li><img src="images/small/tm4.jpg" alt="image4" data-bgimg="images/image4.jpg"/></li>-->
						
					</ul><br>
                    <p>The Taj Mahal, an immense mausoleum of white marble, built in Agra between 1631 and 1648 by order of the Mughal Emperor Shah Jahan, is the jewel of Muslim art in India and one of the universally admired masterpieces of the world's heritage. It no doubt partially owes its renown to the moving circumstances of its construction. Shah Jahan, in order to perpetuate the memory of his favourite wife, Mumtaz Mahal, who died in 1631, had this funerary mosque built. The monument, begun in 1632, was finished in 1648; unverified but nonetheless, tenacious, legends attribute its construction to an international team of several thousands of masons, marble workers, mosaicists and decorators working under the orders of the architect of the emperor, Ustad Ahmad Lahori.</p><br>
                    <p>Situated on the right bank of the Yamuna in a vast Mogul garden of some 17 ha, this funerary monument, bounded by four isolated minarets, reigns with its octagonal structure capped by a bulbous dome through the criss-cross of open perspectives offered by alleys or basins of water. The rigour of a perfect elevation of astonishing graphic purity is disguised and almost contradicted by the scintillation of a fairy-like decor where the white marble, the main building material, brings out and scintillates the floral arabesques, the decorative bands, and the calligraphic inscriptions which are incrusted in polychromatic pietra dura. The materials were brought in from all over India and central Asia and white Makrana marble from Jodhpur. Precious stones for the inlay came from Baghdad, Punjab, Egypt, Russia, Golconda, China, Afghanistan, Ceylon, Indian Ocean and Persia. The unique Mughal style combines elements and styles of Persian, Central Asian and Islamic architecture.</p><br>
                    <p>The Darwaza, the majestic main gateway, is a large three-storey red sandstone structure, completed in 1648, with an octagonal central chamber with a vaulted roof and with smaller rooms on each side. The gateway consists of lofty central arch with two-storeyed wings on either side. The walls are inscribed with verses from the Qu'ran in Arabic in black calligraphy. The small domed pavilions on top are Hindu in style and signify royalty. The gate was originally lined with silver, now replaced with copper, and decorated with 1,000 nails whose heads were contemporary silver coins.</p><br>
                    <p>The Bageecha, the ornamental gardens through which the paths lead, are planned along classical Mughal char bagh style. Two marble canals studded with fountains, lined with cypress trees emanating from the central, raised pool cross in the centre of the garden, dividing it into four equal squares. In each square there are 16 flower beds, making a total of 64 with around 400 plants in each bed. The feature to be noted is that the garden is laid out in such a way as to maintain perfect symmetry. The channels, with a perfect reflection of the Taj, used to be stocked with colourful fish and the gardens with beautiful birds.</p><br>
                    <p>The Taj Mahal itself, situated in the north end of the garden, stands on two bases, one of sandstone and above it a square platform worked into a black and white chequerboard design and topped by a huge blue-veined white marble terrace, on each corner there are four minarets. On the east and west sides of the tomb are identical red sandstone buildings. On the west is the masjid (mosque), which sanctifies the area and provides a place of worship. On the other sides is the jawab, which cannot be used for prayer as it faces away from Mecca. The rauza, the central structure or the mausoleum on the platform, is square with bevelled corners. Each corner has small domes while in the centre is the main double dome topped by a brass finial. The main chamber inside is octagonal with a high domed ceiling. This chamber contains false tombs of Mumtaz and Shah Jahan, laid to rest in precise duplicates in a. Both tombs are exquisitely inlaid and decorated with precious stones, the finest in Agra.</p><br>
                    <p>The Taj Mahal's pure white marble shimmers silver in the moonlight, glows softly pink at dawn, and at close of day reflects the fiery tints of the setting Sun. From an octagonal tower in the Agra Fort across the River Yamuna, Shah Jahan spent his last days as a prisoner of his son and usurper to the empire, Aurangzeb, gazing at the tomb of his beloved Mumtaz.</p><br>
				</div>
			</div>
            
            <div class="mb_content">
				<h2>Description</h2>
				<div class="mb_content_inner">
					 <ul id="mb_imagelist" class="mb_imagelist">
						<li><img src="images/small/sun1.jpg" alt="image1" data-bgimg="images/sun.jpg"/></li>
						<!--<li><img src="images/small/st2.jpg" alt="image2" data-bgimg="images/image2.jpg"/></li>
						<li><img src="images/small/st3.jpg" alt="image3" data-bgimg="images/image3.jpg"/></li>
						<li><img src="images/small/st4.jpg" alt="image4" data-bgimg="images/image4.jpg"/></li>-->
						
					</ul><br>
                    <p>Konârak is an outstanding testimony to the 13th-century kingdom of Orissa. It is directly and materially linked to Brahmin beliefs, and forms the invaluable link in the history of the diffusion of the cult of Surya, which originated in Kashmir during the 8th century and finally reached the shores of eastern India.</p><br>
                    <p>On the eastern coast of India, south of the Mahanadi Delta, is the Brahmin temple of Kimarak (still spelled as Konârak or Konârka), one of the most famous Brahmin sanctuaries of Asia. Konârak derives its name from Konârka, the presiding deity of the Sun Temple. Konârka is a combination of two words, kona (corner) and arka (Sun). It was one of the earliest centres of Sun worship in India. Built around 1250 in the reign of King Narasingha Deva (1238-64), it marks the apogee of the wave of foundations dedicated to the Sun God Surya; the entire temple was conceived as a chariot of the Sun God with a set of spokes and elaborate carvings.</p><br>
                    <p>The present Sun Temple was probably built by King Narashimhadev I (1238-64) of the Ganga dynasty to celebrate his victory over the Muslims. The temple fell into disuse in the early 17th century after it was desecrated by an envoy of the Mughal Emperor Jahangir. The legend has it that the temple was constructed by Samba, the son of Lord Krishna. Samba was afflicted by leprosy and after twelve years of penance he was cured by Surya, the Sun God, in whose honour he built this temple.</p><br>
                    <p>Against the horizon, on the sandy shore, where the rising Sun emerges from the waters of the Gulf of Bengal, stands the temple, built from stone and carefully oriented so as to permit the first rays of the Sun to strike its principal entry. It is a monumental representation of the chariot of Surya pulled by a team of seven horses (six of which still exist and are placed on either side of the stairway leading to the sanctuary).</p><br>
                    <p>On the north and south sides, 24 wheels some 3 m in diameter, lavishly sculptured with symbolic motives referring to the cycle of the seasons and the months, complete the illusionary structure of the temple-chariot. Between the wheels, the plinth of the temple is entirely decorated with reliefs (fantastic lions, musicians and dancers, erotic groups). Like many Indian temples, Konârak comprises several distinct and well-organized spatial units. The vimana (principal sanctuary) was surmounted by a high tower with a sikkara which was razed in the 19th century; to the east, the jahamogana (audience hall) now dominates the ruins with its pyramidal mass, the original effect.</p><br>
                    <p>Further to the east, the natmandir (dance hall), today unroofed, rises on a high platform. Various subsidiary structures are still to be found within the enclosed area of the rectangular wall, which is punctuated by its gates and towers.</p><br>
                    <p>Apart from the Puranas, other religious texts also point towards the existence of a Sun temple at Konârak long before the present temple. Konârak was once a bustling port of Kalinga and had good maritime trade relations with South-East Asian countries.</p><br>
            </div>
            </div>
            <!--
             <div class="mb_content">
				<h2>Description</h2>
				<div class="mb_content_inner">
					 <ul id="mb_imagelist" class="mb_imagelist">
						<li><img src="images/small/jm.jpg" alt="image1" data-bgimg="images/jm1.jpg"/></li>
						<li><img src="images/small/jm2.jpg" alt="image2" data-bgimg="images/image2.jpg"/></li>
						<li><img src="images/small/jm3.jpg" alt="image3" data-bgimg="images/image3.jpg"/></li>
						<li><img src="images/small/jm4.jpg" alt="image4" data-bgimg="images/image4.jpg"/></li>
						
					</ul><br>
            <p>The Jantar Mantar, Jaipur, is an astronomical observation site built in the early 18th century. It includes a set of some twenty main fixed instruments. They are monumental examples in masonry of known instruments but which in many cases have specific characteristics of their own. The Jantar Mantar is an expression of the astronomical skills and cosmological concepts of the court of a scholarly prince at the end of the Mughal period.</p><br>
            <p>The Jantar Mantar observatory in Jaipur constitutes the most significant and best preserved set of fixed monumental instruments built in India in the first half of the 18th century; some of them are the largest ever built in their categories. Designed for the observation of astronomical positions with the naked eye, they embody several architectural and instrumental innovations. The observatory forms part of a tradition of Ptolemaic positional astronomy which was shared by many civilizations. It contributed by this type of observation to the completion of the astronomical tables of Zij. It is a late and ultimate monumental culmination of this tradition.</p><br>
            <p>Through the impetus of its creator, the prince Jai Singh II, the observatory was a meeting point for different scientific cultures, and gave rise to widespread social practices linked to cosmology. It was also a symbol of royal authority, through its urban dimensions, its control of time, and its rational and astrological forecasting capacities. The observatory is the monumental embodiment of the coming together of needs which were at the same time political, scientific, and religious.</p><br>
            <p>Criterion (iii): The Jantar Mantar in Jaipur is an outstanding example of the coming together of observation of the universe, society and beliefs. It provides an outstanding testimony of the ultimate culmination of the scientific and technical conceptions of the great observatory devised in the Medieval world. It bears witness to very ancient cosmological, astronomical and scientific traditions shared by a major set of Western, Middle Eastern, Asian and African religions, over a period of more than fifteen centuries.</p><br>
            <p>Criterion (iv): The Jantar Mantar in Jaipur is an outstanding example of a very comprehensive set of astronomical instruments, in the heart of a royal capital at the end of the Mughal period in India. Several instruments are impressive in their dimensions, and some are the largest ever built in their category.</p><br>
            <p>Integrity and authenticity<br>
The observatory of Jantar Mantar in Jaipur has been affected by its outdoor situation in a tropical area, and then by its temporary abandonment in the 19th century, which has resulted in frequent maintenance interventions and then various restorations over a period of more than a century. Nevertheless, the general integrity of the site has been essentially maintained and partially restored.</p><br>
               <p>On the other hand, establishing the authenticity of each individual instrument is more complex, as a result of the many interventions which have taken place. While authenticity is generally unquestionable with regard to the astronomical function, it is more difficult to establish with regard to plasters, instrument graduations, some architectural interpretations and the immediate landscape environment of elements of the property.</p><br>
                <p>Protection and management measures<br>
The Jantar Mantar is protected under the Rajasthan Monuments Archaeological Site and Antiquities Act, 1961, under Sections 3 and 4. It was designated a monument of national importance in 1968.</p><br>
                <p>The main challenges for the property, which could potentially represent a threat, are controlling the development of tourism, and allowing for urban development in the immediate vicinity of the Jantar Mantar. Major projects to upgrade the district and modify traffic have been announced, and these may affect the buffer zone, and more generally the landscape and cultural environment of the property. It is in particular necessary to specify the measures taken to protect the buffer zone, and to include these measures in the upcoming Master Plan of the municipality of Jaipur. The system for the management of the property is appropriate, provided that it includes a genuinely overarching management body and provided that the Management Plan is promulgated. Furthermore, it is necessary to strengthen the scientific expertise of the bodies in charge of managing the property.</p><br>
            
            </div>
            </div>
            -->
            
             <div class="mb_content">
				<h2>Description</h2>
				<div class="mb_content_inner">
					 <ul id="mb_imagelist" class="mb_imagelist">
						<li><img src="images/small/redfort.jpg" alt="image1" data-bgimg="images/redfort1.jpg"/></li>
						<!--<li><img src="images/small/rf2.jpg" alt="image2" data-bgimg="images/image2.jpg"/></li>
						<li><img src="images/small/rf3.jpg" alt="image3" data-bgimg="images/image3.jpg"/></li>
						<li><img src="images/small/rf4.jpg" alt="image4" data-bgimg="images/image4.jpg"/></li>-->
						
					</ul><br>
            <p>The planning and design of the Red Fort represents a culmination of architectural development initiated in 1526 AD by the first Mughal Emperor and brought to a splendid refinement by Shah Jahan with a fusion of traditions: Islamic, Persian, Timurid and Hindu. The innovative planning arrangements and architectural style of building components as well as garden design developed in the Red Fort strongly influenced later buildings and gardens in Rajasthan, Delhi, Agra and further afield. The Red Fort has been the setting for events which have had a critical impact on its geo-cultural region.</p><br>
            <p>Criterion (ii): The final flourishing of Mughal architecture built upon local traditions but enlivened them with imported ideas, techniques, craftsmanship and designs to provide a fusion of Islamic, Persian, Timurid and Hindu traditions. The Red Fort demonstrates the outstanding results this achieved in planning and architecture.</p><br>
            <p>Criterion (iii): The innovative planning arrangements and architectural style of building components and garden design developed in the Red Fort strongly influenced later buildings and gardens in Rajasthan, Delhi, Agra and further afield. The Red Fort Complex also reflects the phase of British military occupation, introducing new buildings and functions over the earlier Mughal structures.</p><br>
            <p>Criterion (vi): The Red Fort has been a symbol of power since the reign of Shah Jahan, has witnessed the change in Indian history to British rule, and was the place where Indian independence was first celebrated, and is still celebrated today. The Red Fort Complex has thus been the setting of events critical to the shaping of regional identity, and which have had a wide impact on the geo-cultural region.</p><br>
            <p>The Red Fort Complex is a layered expression of both Mughal architecture and planning, and the later British military use of the forts. The most dramatic impacts on the integrity of the Red Fort Complex come from the change of the river into a major road, which alters the relationship of the property to its intended setting; and from the division of the Salimgarh Fort by a railway. Nevertheless the Salimgarh Fort is inextricably linked to the Red Fort in use and later history. The integrity of the Salimgarh Fort can only be seen in terms of its value as part of the overall Red Fort Complex. The authenticity of the Mughal and British buildings in the Red Fort Complex is established, although more work is needed to establish the veracity of the current garden layout. In the specific case of the Salimgarh Fort, the authenticity of the Mughal period is related to knowledge of its use and associations, and of the built structures dating from the British period.</p><br>
            <p>The nominated property has been declared a monument of national importance under the Ancient Monument and Archaeological Sites and Remains Act, 1959. A buffer zone has been established. Although the state of conservation of the property has improved over the past ten years, much more work is needed to put the overall state of the property into a stable condition and to ensure visitors do not contribute to its decay. The Red Fort Complex is managed directly by the Archaeological Survey of India, which is also responsible for the protection of all national level heritage sites in India and Indian cultural properties included in the World Heritage List.
            </p><br>
            
            </div>
            </div>
            <!--
             <div class="mb_content">
				<h2>Description</h2>
				<div class="mb_content_inner">
					 <ul id="mb_imagelist" class="mb_imagelist">
						<li><img src="images/small/ht1.jpg" alt="image1" data-bgimg="images/image1.jpg"/></li>
						<li><img src="images/small/ht2.jpg" alt="image2" data-bgimg="images/image2.jpg"/></li>
						<li><img src="images/small/ht3.jpg" alt="image3" data-bgimg="images/image3.jpg"/></li>
						<li><img src="images/small/ht4.jpg" alt="image4" data-bgimg="images/image4.jpg"/></li>
						
					</ul><br>
            <p>Exemplifying the formative stage of the Mughal structural style, Humayun's Tomb stands as a landmark in the development of Mughal architecture, and also represents the earliest extant specimen of the Mughal scheme of the garden tomb, with causeways and channels. It is a well-developed specimen of the double-domed elevation with kiosks on a grand scale. This building tradition culminated in the Taj Mahal, constructed a century later. Despite being the first standardized example of this style, Humayun's Tomb is an architectural achievement of the highest order.</p><br>
            <p>The tomb of Humayun, second Mughal Emperor of India, was built by his widow, Biga Begum (Hajji Begum), in 1569-70, 14 years after his death, at a cost of 1.5 million rupees. The architect was Mirak Mirza Ghiyath. It was later used for the burial of various members of the ruling family and contains some 150 graves. It has aptly been described as the necropolis of the Mughal dynasty.
            </p><br>
            <p>The tomb itself is in the centre of a large garden, laid out in char baah (four-fold) style, with pools joined by channels. The main entrance is on the south side, and there is another entrance on the west side. A pavilion and a bath are located in the centre of the eastern and northern walls respectively. The mausoleum itself is on a high, wide, terraced platform with small arched cells along the sides.</p><br>
            <p>In plan it is an irregular octagon with four long and four short sides. It is surmounted by a 42.5 m high double dome clad with marble flanked by decorative pillared kiosks (chhatris). The middle of each side is deeply recessed by large arched vaults with a series of smaller ones set into the face. The interior is a large octagonal chamber with vaulted roof compartments interconnected by galleries or corridors. This octagonal plan is repeated on the second storey. The structure is of dressed stone clad in red sandstone with white and black in laid marble borders. Within the enceinte to the south-east of Humayun's Tomb there is a fine square tomb of 1590-91, known as the Barber's Tomb.</p><br>
            <p>The tomb and its surrounding structures are substantially in their original state, and interventions in the present century have been minimal and of high quality.</p><br>
            <p>The importance of Humayun's Tomb in the evolution of Mughal architecture is great. It is the first of a long series of dynastic tombs and innovative in a number of ways, notably by virtue of the fact that it introduced the garden tomb to the subcontinent. Humayun had travelled widely in the Islamic world, notably in Persia and central Asia, and brought back with him ideas that were applied by the architect of his tomb, under the direction of his widow, in this tomb. The tomb has been respected throughout its history and so has retained its original form and purpose intact. Subsequent interventions have been aimed at preserving this character.</p><br>
            
            </div>
            </div>
            
             <div class="mb_content">
				<h2>Description</h2>
				<div class="mb_content_inner">
					 <ul id="mb_imagelist" class="mb_imagelist">
						<li><img src="images/small/ec1.jpg" alt="image1" data-bgimg="images/image1.jpg"/></li>
						<li><img src="images/small/ec2.jpg" alt="image2" data-bgimg="images/image2.jpg"/></li>
						<li><img src="images/small/ec3.jpg" alt="image3" data-bgimg="images/image3.jpg"/></li>
						<li><img src="images/small/ec4.jpg" alt="image4" data-bgimg="images/image4.jpg"/></li>
						
					</ul><br>
            <p>The island of Elephanta, the glorious abode of Lord Shiva and an epitome of Hindu cave culture, consists of seven caves on an island in the Sea of Oman close to Mumbai which, with their decorated temples and the images from Hindu mythology, bear a unique testimony to a civilization that has disappeared. Here, Indian art has found one of its most perfect expressions, particularly in the huge high reliefs in the main cave.</p><br>
            <p>The island of Gharapuri, the 'City of Caves', situated about 10 km from Mumbai on the east side of the harbour, owes its name to the enormous stone elephant found there by Portuguese navigators. This elephant was cut into pieces, removed to Mumbai and somehow put together again. It is today the melancholy guardian of Victoria Gardens Zoo in Mumbai, the great metropolis of Maharashtra State and India's second city population-wise.</p><br>
            <p>The date of the famous Elephanta Caves is still very much debated and varies from the 6th century to the 8th century according to different specialists. They constitute one of the most striking collections of rock-art in India. There are two groups of caves. To the east, Stupa Hill (thus named because of a small brick Buddhist monument at the top) contains two caves, one of which is unfinished, and several cisterns. To the west, the larger group consists of five rock-cut Hindu shrines. The main cave is universally famous for its carvings to the glory of Shiva, who is exalted in various forms and act ions. The cave consists of a square plan mandapa whose sides measure about 27 m.</p><br>
            <p>The interior is divided up into smaller areas by rows of supports. The whole shape carefully imitates a building; false profiled beams have been carved in the roof of the cave and the supports, which are complex structures, combine, from bottom to top, the shapes of the pillars, columns and capitals found in bonded stone architecture. At the very entrance to the cave, to the north of an esplanade reached by a steep flight of steps, the pilgrim or visitor to this high place of Shivaism is greeted by two large carved panels depicting, on the left, Shiva Yogisvara (Master of Yoga) and, on the right, Shiva Nataraja (King of Dance), both treated in a monumental style still close to that of the Gupta period. In a chapel on the right of the entrance stands the cylindrical lingam, symbol of the Supreme Being and principle of all energy.</p><br>
            <p>This chapel has four doors, each flanked by colossal figures of dvarapala, those mediator guardians whose task was to admit the faithful and keep out ill-intentioned visitors. On each wall of the mandapa, enormous high-reliefs (maximum height 5.70 m) present further pictures of Shiva. Opposite the entrance, on the south wall, is the famous and unforgettable three-headed bust of the Mahadeva, whose three faces are the incarnation of three essential functions; to the east, Aghora or Bhairava, terrifying destroyer; to the west, Vamadeva, creator of joy and beauty, incarnated by a woman's head; and in the centre, Tatpurusha, master of positive and negative principles of existence and preserver of their harmony.</p><br>
            <p>On either side of this central figure there are two other reliefs depicting, on the left, androgynous Shiva (Ardhanarisvara) and, on the right, Shiva receiving the waters of the Ganges (Gangadhara). Ten other reliefs, placed in each angle of the main hall and in the aisles to the east and west, depict further episodes from the legend of Shiva, such as the marriage of Shiva to Parvati, Shiva killing the devil Andhaka, etc. The 15 large reliefs surrounding the lingam chapel in the main Elephanta Cave not only constitute one of the greatest examples of Indian art but also one of the most important collections for the cult of Shiva.</p>
            <br>
            
            </div>
            </div>
            
             <div class="mb_content">
				<h2>Description</h2>
				<div class="mb_content_inner">
					 <ul id="mb_imagelist" class="mb_imagelist">
						<li><img src="images/small/fs1.jpg" alt="image1" data-bgimg="images/image1.jpg"/></li>
						<li><img src="images/small/fs2.jpg" alt="image2" data-bgimg="images/image2.jpg"/></li>
						<li><img src="images/small/fs3.jpg" alt="image3" data-bgimg="images/image3.jpg"/></li>
						<li><img src="images/small/fs4.jpg" alt="image4" data-bgimg="images/image4.jpg"/></li>
						
					</ul><br>
            <p>Fatehpur Sikri bears exceptional testimony to the Mughal civilization at the end of the 16th century. It offers a unique example of architectural ensembles of very high quality constructed between 1571 and 1585. Its form and layout strongly influenced the evolution of Indian town planning, notably at Shahjahanabad (Old Delhi).</p><br>
            <p>The 'City of Victory' had only an ephemeral existence as the capital of the Mughal empire. The Emperor Akbar (1556-1605) decided to construct it in 1571, on the same site where the birth of his son, the future Jahangir, was predicted by the wise Shaikh Salim Chisti (1480-1572). The work, supervised by the great Mughal himself, was completed in 1573. In 1585, however, Akbar abandoned Fatehpur Sikri to fight against the Afghan tribes and choose a new capital, Lahore. Fatehpur Sikri was to be the seat of the great Mughal court only once more for three months in 1619, when Jahangir sought refuge there from the plague that devastated Agra. The site was then finally abandoned, until its archaeological exploration in 1892.</p><br>
            <p>This capital without a future, some 40 km from Agra was, however, considerably more than the fancy of a sovereign during the 14 years of its existence. The city, which the English traveller Ralph Fitch considered in 1585 as 'considerably larger than London and more populous', comprised a series of palaces, public buildings and mosques, as well as living areas for the court, the army, servants of the king and for an entire population whose history has not been recorded.</p><br>
            <p>Only one tiny part of the city (where the large buildings are concentrated) has been until now, studied, visited and relatively well preserved. Fatehpur Sikri, constructed on a rocky plateau, south-east of an artificial lake, created for the occasion and today partially dried up, is bounded on three sides by a 6 km wall, fortified by towers and pierced by seven gates (the best preserved is the Gate of Agra, the second from the north). This spacious enclosure defines the limits of the new foundation rather than assuring its defence.</p><br>
            <p>The majority of the important monuments are found to the north of the road from Gaza to Agra; constructed of red sandstone, they form a homogeneous group, even if the eclecticism of their style is evident and is based on borrowings from Hindu, Persian and Indo-Muslim traditions. Among the numerous palaces, gazebos, pavilions, etc., may be cited in particular:</p><br>
            <p>Diwan-i-Am, the Hall of Public Audience, is encircled by a series of porticos which are broken up by the insertion of the imperial box where Akbar, surrounded by his ministers and officers meted out justice. This box communicates directly with Daulat Khana (Imperial Palace), flanked to the north by Diwan-i-Kas (Hall of Private Audience), called the 'Jewel House', a monument known for its central plan, which comprises an extraordinary capital surmounted by a circular balcony: the 'throne'.</p><br>
            <p>Other monuments of exceptional quality are the Ranch Mahal, whose elevation of four recessed storeys recalls certain Buddhist temples, the pavilion of Anup Talao, or the Turkish Sultana, the palace of Jodh Bai, the palace of Birbal, the caravanserai and the problematic 'stables'.</p><br>
            <p>Owing to the piety of Akbar, many religious and votive monuments were constructed at Fatehpur Sikri. The great mosque (Jama Masjid), one of the most spacious in India (165 m by 133 m) could accommodate some 10,000 faithful; it was completed in 1571-72 and according to the dedicatory inscription deserves no less respect than Mecca. It incorporates, in the centre of the court, the tomb of Shaikh Salim, an extraordinary Christian masterpiece of sculpted decoration, further embellished under the reign of Jahangir.</p>
            <br>
            <p>To the south of the court, the Buland Damaza, completed in 1575, commemorating the victories (the taking of Gujarat in 1572) to which the city, their monumental symbol, owes its existence and its name.
</p><br>
            
            </div>
            </div>-->
            
		</div>
        <br><br>
		<div class="mb_footer">
			<a class="mb_left" href="http://tympanus.net/Tutorials/ExpandingImageMenu/"><span>About Us</span></a>
			<a href="http://tympanus.net/codrops/2011/03/28/moving-boxes-content/"><strong>Contact Us</strong></a>
			<a href="http://www.flickr.com/people/jinthai/" target="_blank">Email</a>
		</div>
		<!-- The JavaScript -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<!-- the mousewheel plugin - optional to provide mousewheel support -->
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<!-- the jScrollPane script -->
		<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" src="js/jquery.transform-0.9.3.min_.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
		<script type="text/javascript">
			$(function() {
				var $menu			= $('#mb_menu'),
				$menuItems			= $menu.children('a'),
				$mbWrapper			= $('#mb_content_wrapper'),
				$mbClose			= $mbWrapper.children('.mb_close'),
				$mbContentItems		= $mbWrapper.children('.mb_content'),
				$mbContentInnerItems= $mbContentItems.children('.mb_content_inner');
				$mbPattern			= $('#mb_pattern'),
				$works				= $('#mb_imagelist > li'),
				$mb_bgimage			= $('#mb_background > img'),
				
				Menu		 		= (function(){
					
					var init		= function() {
						preloadImages();
						initPlugins();
						initPattern();
						initEventsHandler();
					},
					//preloads the images for the work area (data-bgimg attr)
					preloadImages	= function() {
						$works.each(function(i) {
							$('<img/>').attr('src' , $(this).children('img').data('bgimg'));
						});
					},
					//initialise the jScollPane (scroll plugin)
					initPlugins		= function() {
						$mbContentInnerItems.jScrollPane({
							verticalDragMinHeight: 40,
							verticalDragMaxHeight: 40
						});
					},
					/*
						draws 16 boxes on a specific area of the page.
						we randomly calculate the top, left, and rotation angle for each one of them
					 */
					initPattern		= function() {
						for(var i = 0; i < 16 ; ++i) {
							//random opacity, top, left and angle
							var o		= 0.1,
							t		= Math.floor(Math.random()*196) + 5, // between 5 and 200
							l		= Math.floor(Math.random()*696) + 5, // between 5 and 700
							a		= Math.floor(Math.random()*101) - 50; // between -50 and 50
									
							$el		= $('<div>').css({
								opacity			: o,
								top				: t + 'px',
								left			: l + 'px'
							});
								
							if (!$.browser.msie)
								$el.transform({'rotate'	: a + 'deg'});
								
							$el.appendTo($mbPattern);
						}
						$mbPattern.children().draggable(); //just for fun
					},
					/*
						when the User closes a content item, we move the boxes back to the original place,
						with new random values for top, left and angle though
					 */
					disperse 		= function() {
						$mbPattern.children().each(function(i) {
							//random opacity, top, left and angle
							var o			= 0.1,
							t			= Math.floor(Math.random()*196) + 5, // between 5 and 200
							l			= Math.floor(Math.random()*696) + 5, // between 5 and 700
							a			= Math.floor(Math.random()*101) - 50; // between -50 and 50
							$el			= $(this),
							param		= {
								width	: '50px',
								height	: '50px',
								opacity	: o,
								top		: t + 'px',
								left	: l + 'px'
							};
									
							if (!$.browser.msie)
								param.rotate	= a + 'deg';
									
							$el.animate(param, 1000, 'easeOutExpo');
						});
					},
					initEventsHandler	= function() {
						/*
							click a link in the menu
						 */
						$menuItems.bind('click', function(e) {
							var $this	= $(this),
							pos		= $this.index(),
							speed	= $this.data('speed'),
							easing	= $this.data('easing');
							//if an item is not yet shown
							if(!$menu.data('open')){
								//if current animating return
								if($menu.data('moving')) return false;
								$menu.data('moving', true);
								$.when(openItem(pos, speed, easing)).done(function(){
									$menu.data({
										open	: true,
										moving	: false
									});
									showContentItem(pos);
									$mbPattern.children().fadeOut(500);
								});
							}
							else
								showContentItem(pos);
							return false;
						});
							
						/*
							click close makes the boxes animate to the top of the page
						 */
						$mbClose.bind('click', function(e) {
							$menu.data('open', false);
							/*
								if we would want to show the default image when we close:
								changeBGImage('images/default.jpg');
							 */
							$mbPattern.children().fadeIn(500, function() {
								$mbContentItems.hide();
								$mbWrapper.hide();
							});
								
							disperse();
							return false;
						});
							
						/*
							click an image from "Works" content item,
							displays the image on the background
						 */
						$works.bind('click', function(e) {
							var source	= $(this).children('img').data('bgimg');
							changeBGImage(source);
							return false;
						});
								
					},
					/*
						changes the background image
					 */
					changeBGImage		= function(img) {
						//if its the current one return
						if($mb_bgimage.attr('src') === img || $mb_bgimage.siblings('img').length > 0)
							return false;
									
						var $itemImage = $('<img src="'+img+'" alt="Background" class="mb_bgimage" style="display:none;"/>');
						$itemImage.insertBefore($mb_bgimage);
							
						$mb_bgimage.fadeOut(1000, function() {
							$(this).remove();
							$mb_bgimage = $itemImage;
						});
						$itemImage.fadeIn(1000);
					},
					/*
						This shows a content item when there is already one shown:
					 */
					showContentItem		= function(pos) {
						$mbContentItems.hide();
						$mbWrapper.show();
						$mbContentItems.eq(pos).show().children('.mb_content_inner').jScrollPane();
					},
					/*
						moves the boxes from the top to the center of the page,
						and shows the respective content item
					 */
					openItem			= function(pos, speed, easing) {
						return $.Deferred(
						function(dfd) {
							$mbPattern.children().each(function(i) {
								var $el			= $(this),
								param		= {
									width	: '100px',
									height	: '100px',
									top		: 154 + 100 * Math.floor(i/4),
									left	: 200 + 100 * (i%4),
									opacity	: 1
								};
										
								if (!$.browser.msie)
									param.rotate	= '0deg';
										
								$el.animate(param, speed, easing, dfd.resolve);
							});
						}
					).promise();
					};
						
					return {
						init : init
					};
					
				})();
			
				/*
					call the init method of Menu
				 */
				Menu.init();
			});
		</script>
    </body>
</html>