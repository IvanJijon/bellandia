-- Add column lang 
ALTER TABLE activities ADD lang VARCHAR(60);
ALTER TABLE rooms ADD lang VARCHAR(60);

ALTER TABLE activities ADD activities_order VARCHAR(60) AFTER id;
ALTER TABLE rooms ADD room_order VARCHAR(60) AFTER id;

-- Set existing rows to 'es'
UPDATE `activities` SET lang='es';
UPDATE `rooms` SET lang='es';

-- Inserts 

	-- Activities
INSERT INTO `activities` (`id`, `activities_order` , `name`, `description`, `img`, `lang`) VALUES
(6,1, 'TRAIL', 'Within 30 acres of woodland trails are distributed, showing the native vegetation of the area, rich in medicinal plants, wild flowers, orchids and birds.', 'sendero.jpg', 'en'),
(7,2, 'WATERFALL', 'The confluence of many natural streams overflows in a cascade of about 60 meters. Enjoy the energy of the surroundings, the breeze and the purity of its waters is an unforgettable experience. You can access it through a nature trail with 365 steps or through a simple path of 10 minutes walking.', 'cascada.jpg', 'en'),
(8,3, 'NATURAL SWIMMING POOL', 'Natural water Fountain nourish continuously with poor water of the waterfall. Surrounded by forest, birds and butterflies it has the perfect environment for a restful sleep.', 'piscina.jpg', 'en'),
(9,4, 'BIRDWATCHING', 'There is a variety of birds in the area that delight you with their colors and shapes.', 'aves.jpg', 'en'),
(10,5, 'RESTAURANT', 'Along with a privileged view of the Amazon rainforest, you will enjoy the authentic taste of Ecuadorian and international cuisine with local ingredients, exquisitely selected.', 'restaurante.jpg', 'en');


	-- Rooms
INSERT INTO `rooms` (`id`, `room_order`, `name`, `img`, `features`, `lang`) VALUES
(5,1, 'DOUBLE OR TWIN', 'dobleotwin.png', '["Disabled Access","1 room with bathroom ","Full or twin bed","Terrace with beautiful views of the jungle","Maximum 2 Guest","Wide Construction","Modern Architecture","Private Bathroom","Hot Water","Terrace with view to the Forest and Mountains"]', 'en'),
(6,2, 'GREEN BUNGALOW', 'cabanaverde.png', '["Disabled Access","1 room with bathroom ","Full or twin bed","Terrace with beautiful views of the jungle","Maximum 2 Guest","Wide Construction","Modern Architecture","Private Bathroom","Hot Water","Terrace with view to the Forest and Mountains"]', 'en'),
(7,3, 'WIDE GREEN BUNGALOW', 'cabanaverdeamplia.png', '["Disabled Access","1 room with bathroom ","Full or twin bed","Terrace with beautiful views of the jungle","Maximum 2 Guest","Wide Construction","Modern Architecture","Private Bathroom","Hot Water","Terrace with view to the Forest and Mountains"]', 'en'),
(8,4, '2 BEDROOM BUNGALOW', 'cabanadoshabitaciones.png', '["Disabled Access","1 room with bathroom ","Full or twin bed","Terrace with beautiful views of the jungle","Maximum 2 Guest","Wide Construction","Modern Architecture","Private Bathroom","Hot Water","Terrace with view to the Forest and Mountains"]', 'en');
