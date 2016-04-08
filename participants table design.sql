use wordpress_4mm6h6adih;
CREATE TABLE participants (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id_user BIGINT(20) UNSIGNED NOT NULL,
id_post BIGINT(20) UNSIGNED NOT NULL,
FOREIGN KEY (id_user) REFERENCES wordpress_4mm6h6adih.wp_fema_users(ID),
FOREIGN KEY (id_post) REFERENCES wordpress_4mm6h6adih.wp_fema_posts(ID)
);
