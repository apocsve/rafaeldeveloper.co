<?php

return [
    'plugin' => [
        'name' => 'Blog',
        'description' => 'Una solida piattaforma di blogging.'
    ],
    'blog' => [
        'menu_label' => 'Blog',
        'menu_description' => 'Gestisci i post',
        'posts' => 'Post',
        'create_post' => 'post del blog',
        'categories' => 'Categorie',
        'create_category' => 'categorie del blog',
        'tab' => 'Blog',
        'access_posts' => 'Gestisci i post',
        'access_categories' => 'Gestisci le categorie',
        'access_other_posts' => 'Gestisci i post di altri utenti',
        'access_import_export' => 'Permesso ad importare ed esportare i post',
        'delete_confirm' => 'Sei sicuro?',
        'chart_published' => 'Pubblicato',
        'chart_drafts' => 'Bozze',
        'chart_total' => 'Totale'
    ],
    'posts' => [
        'list_title' => 'Gestisci i post',
        'category' => 'Categoria',
        'hide_published' => 'Nascondi pubblicati',
        'new_post' => 'Nuovo post'
    ],
    'post' => [
        'title' => 'Titolo',
        'title_placeholder' => 'Titolo del nuovo post',
        'content' => 'Contenuto',
        'content_html' => 'Contenuto HTML',
        'slug' => 'Slug',
        'slug_placeholder' => 'slug-del-nuovo-post',
        'categories' => 'Categorie',
        'author_email' => 'Email dell\'autore',
        'created' => 'Creato',
        'created_date' => 'Data di creazione',
        'updated' => 'Aggiornato',
        'updated_date' => 'Data di aggiornamento',
        'published' => 'Pubblicato',
        'published_date' => 'Data di pubblicazione',
        'published_validation' => 'Per favore fornisci la data di pubblicazione',
        'tab_edit' => 'Modifica',
        'tab_categories' => 'Categorie',
        'categories_comment' => 'Seleziona le categorie a cui appartiene il post',
        'categories_placeholder' => 'Non ci sono categorie, per iniziare dovresti crearne una!',
        'tab_manage' => 'Gestisci',
        'published_on' => 'Pubblicato il',
        'excerpt' => 'Estratto',
        'summary' => 'Riassunto',
        'featured_images' => 'Immagini in evidenza',
        'delete_confirm' => 'Vuoi veramente cancellare questo post?',
        'close_confirm' => 'Questo post non è salvato.',
        'return_to_posts' => 'Ritorna all\'elenco dei post'
    ],
    'categories' => [
        'list_title' => 'Gestisci le categorie del blog',
        'new_category' => 'Nuova categoria',
        'uncategorized' => 'Non categorizzato'
    ],
    'category' => [
        'name' => 'Nome',
        'name_placeholder' => 'Nome della nuova categoria',
        'slug' => 'Slug',
        'slug_placeholder' => 'slug-nuova-categoria',
        'posts' => 'Post',
        'delete_confirm' => 'Vuoi veramente cancellare questa categoria?',
        'return_to_categories' => 'Ritorna all\'elenco delle categorie del blog',
        'reorder' => 'Riordino Categorie'
    ],
    'settings' => [
        'category_title' => 'Elenco Categorie',
        'category_description' => 'Mostra un\'elenco delle categorie del blog sulla pagina.',
        'category_slug' => 'Slug categoria',
        'category_slug_description' => "Cerca la categoria del blog usando lo slug fornito. Questa proprietà è usata dal componente parziale di default per segnare la categoria attualmente usata.",
        'category_display_empty' => 'Mostra categorie vuote',
        'category_display_empty_description' => 'Mostra categorie che non hanno alcun post.',
        'category_page' => 'Pagina delle categorie',
        'category_page_description' => 'Nome del file della pagina delle categorie contenente i link delle categorie. Questa proprietà è usata dal componente parziale di default.',
        'post_title' => 'Post',
        'post_description' => 'Mostra un post sulla pagina.',
        'post_slug' => 'Slug del post',
        'post_slug_description' => "Cerca il post con lo slug fornito.",
        'post_category' => 'Pagina delle categorie',
        'post_category_description' => 'Nome del file della pagina delle categorie contenente i link delle categorie. Questa proprietà è usata dal componente parziale di default.',
        'posts_title' => 'Elenco dei post',
        'posts_description' => 'Mostra un\'elenco degli ultimi post sulla pagina.',
        'posts_pagination' => 'Numero di pagina',
        'posts_pagination_description' => 'Questo valore è usato per determinare su quale pagina è l\'utente.',
        'posts_filter' => 'Filtro delle categorie',
        'posts_filter_description' => 'Inserisci lo slug di una categoria o un parametro dell\'URL con il quale filtrare i post. Lascia vuoto per mostrare tutti i post.',
        'posts_per_page' => 'Post per pagina',
        'posts_per_page_validation' => 'Il valore di post per pagina ha un formato non valido ',
        'posts_no_posts' => 'Messaggio per l\'assenza di post',
        'posts_no_posts_description' => 'Messaggio da mostrare nell\'elenco dei post in caso non ce ne siano. Questa proprietà è usata dal componente parziale di default.',
        'posts_order' => 'Ordine dei post',
        'posts_order_description' => 'Attributo sul quale i post dovrebbero esser ordinati',
        'posts_category' => 'Pagina delle categorie',
        'posts_category_description' => 'Nome del file per la pagina delle categorie per i link "Postato in" alle categorie. Questa proprietà è usata dal componente parziale di default.',
        'posts_post' => 'Pagina del post',
        'posts_post_description' => 'Nome del file per la pagina del post per i link "Scopri di più". Questa proprietà è usata dal componente parziale di default.'
    ]
];