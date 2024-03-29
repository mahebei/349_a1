CREATE TABLE zone (   
	city varchar(80),   
	hour integer not null, 
	minute integer not null,
	primary key(city)
);


INSERT INTO zone VALUES ('International Date Line West', -12, 0);
INSERT INTO zone VALUES ('Midway Island, Samoa', -11, 0);
INSERT INTO zone VALUES ('Hawaii', -10, 0);
INSERT INTO zone VALUES ('Alaska', -9, 0);
INSERT INTO zone VALUES ('Pacific Time (US & Canada)', -8, 0);
INSERT INTO zone VALUES ('Tijuana, Baja California', -8, 0);
INSERT INTO zone VALUES ('Arizona', -7, 0);
INSERT INTO zone VALUES ('Chihuahua, La Paz, Mazatlan', -7, 0);
INSERT INTO zone VALUES ('Mountain Time (US & Canada)', -7, 0);
INSERT INTO zone VALUES ('Central America', -6, 0);
INSERT INTO zone VALUES ('Central Time (US & Canada)', -6, 0);
INSERT INTO zone VALUES ('Guadalajara, Mexico City, Monterrey', -6, 0);
INSERT INTO zone VALUES ('Saskatchewan', -6, 0);
INSERT INTO zone VALUES ('Bogota, Lima, Quito, Rio Branco', -5, 0);
INSERT INTO zone VALUES ('Eastern Time (US & Canada)', -5, 0);
INSERT INTO zone VALUES ('Indiana (East)', -5, 0);
INSERT INTO zone VALUES ('Atlantic Time (Canada)', -4, 0);
INSERT INTO zone VALUES ('Caracas, La Paz', -4, 0);
INSERT INTO zone VALUES ('Manaus', -4, 0);
INSERT INTO zone VALUES ('Santiago', -4, 0);
INSERT INTO zone VALUES ('Newfoundland', -3, 30);
INSERT INTO zone VALUES ('Brasilia', -3, 0);
INSERT INTO zone VALUES ('Buenos Aires, Georgetown', -3, 0);
INSERT INTO zone VALUES ('Greenland', -3, 0);
INSERT INTO zone VALUES ('Montevideo', -3, 0);
INSERT INTO zone VALUES ('Mid-Atlantic', -2, 0);
INSERT INTO zone VALUES ('Cape Verde Is.', -1, 0);
INSERT INTO zone VALUES ('Azores', -1, 0);
INSERT INTO zone VALUES ('Casablanca, Monrovia, Reykjavik', 0, 0);
INSERT INTO zone VALUES ('GMT: Dublin, Edinburgh, Lisbon, London', 0, 0);
INSERT INTO zone VALUES ('Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna', 1, 0);
INSERT INTO zone VALUES ('Belgrade, Bratislava, Budapest, Ljubljana, Prague', 1, 0);
INSERT INTO zone VALUES ('Brussels, Copenhagen, Madrid, Paris', 1, 0);
INSERT INTO zone VALUES ('Sarajevo, Skopje, Warsaw, Zagreb', 1, 0);
INSERT INTO zone VALUES ('West Central Africa', 1, 0);
INSERT INTO zone VALUES ('Amman', 2, 0);
INSERT INTO zone VALUES ('Athens, Bucharest, Istanbul', 2, 0);
INSERT INTO zone VALUES ('Beirut', 2, 0);
INSERT INTO zone VALUES ('Cairo', 2, 0);
INSERT INTO zone VALUES ('Harare, Pretoria', 2, 0);
INSERT INTO zone VALUES ('Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius', 2, 0);
INSERT INTO zone VALUES ('Jerusalem', 2, 0);
INSERT INTO zone VALUES ('Minsk', 2, 0);
INSERT INTO zone VALUES ('Windhoek', 2, 0);
INSERT INTO zone VALUES ('Kuwait, Riyadh, Baghdad', 3, 0);
INSERT INTO zone VALUES ('Moscow, St. Petersburg, Volgograd', 3, 0);
INSERT INTO zone VALUES ('Nairobi', 3, 0);
INSERT INTO zone VALUES ('Tbilisi', 3, 0);
INSERT INTO zone VALUES ('Tehran', 3, 30);
INSERT INTO zone VALUES ('Abu Dhabi, Muscat', 4, 0);
INSERT INTO zone VALUES ('Baku', 4, 0);
INSERT INTO zone VALUES ('Yerevan', 4, 0);
INSERT INTO zone VALUES ('Kabul', 4, 30);
INSERT INTO zone VALUES ('Yekaterinburg', 5, 0);
INSERT INTO zone VALUES ('Islamabad, Karachi, Tashkent', 5, 0);
INSERT INTO zone VALUES ('Sri Jayawardenapura', 5, 30);
INSERT INTO zone VALUES ('Chennai, Kolkata, Mumbai, New Delhi', 5, 30);
INSERT INTO zone VALUES ('Kathmandu', 5, 45);
INSERT INTO zone VALUES ('Almaty, Novosibirsk', 6, 0);
INSERT INTO zone VALUES ('Astana, Dhaka', 6, 0);
INSERT INTO zone VALUES ('Yangon (Rangoon)', 6, 30);
INSERT INTO zone VALUES ('Bangkok, Hanoi, Jakarta', 7, 0);
INSERT INTO zone VALUES ('Krasnoyarsk', 7, 0);
INSERT INTO zone VALUES ('Beijing, Chongqing, Hong Kong, Urumqi', 8, 0);
INSERT INTO zone VALUES ('Kuala Lumpur, Singapore', 8, 0);
INSERT INTO zone VALUES ('Irkutsk, Ulaan Bataar', 8, 0);
INSERT INTO zone VALUES ('Perth', 8, 0);
INSERT INTO zone VALUES ('Taipei', 8, 0);
INSERT INTO zone VALUES ('Osaka, Sapporo, Tokyo', 9, 0);
INSERT INTO zone VALUES ('Seoul', 9, 0);
INSERT INTO zone VALUES ('Yakutsk', 9, 0);
INSERT INTO zone VALUES ('Adelaide', 9, 30);
INSERT INTO zone VALUES ('Darwin', 9, 30);
INSERT INTO zone VALUES ('Brisbane', 10, 0);
INSERT INTO zone VALUES ('Canberra, Melbourne, Sydney', 10, 0);
INSERT INTO zone VALUES ('Hobart', 10, 0);
INSERT INTO zone VALUES ('Guam, Port Moresby', 10, 0);
INSERT INTO zone VALUES ('Vladivostok', 10, 0);
INSERT INTO zone VALUES ('Magadan, Solomon Is., New Caledonia', 11, 0);
INSERT INTO zone VALUES ('Auckland, Wellington', 12, 0);
INSERT INTO zone VALUES ('Fiji, Kamchatka, Marshall Is.', 12, 0);
