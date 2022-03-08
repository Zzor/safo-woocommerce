<?php get_header(); ?>

<main class="p-home">
  <header class="p-home__hero">
    <picture class="p-home__hero-picture">
      <?php $home_hero_image = get_field('home_hero_image'); ?>
      <?php if($home_hero_image) : ?>
        <img src="<?= esc_url($home_hero_image['url']); ?>" 
            alt="<?= esc_attr($home_hero_image['alt']); ?>" />
      <?php endif; ?>
    </picture>

    <h1 class="p-home__title">
      Cyrille Mulot <br>
      Photography
    </h1>

    <a href="#link-home-description" class="p-home__scroll-down">
      <img src="<?= THEME_IMG ?>/arrow-down.svg" alt="">
    </a>
  </header>

  <section id="link-home-description">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, neque aliquid deserunt at eaque quibusdam. Culpa amet nesciunt expedita iste libero itaque sint rerum ex dicta! Nisi quod quidem iste?
    Voluptas a dignissimos illum est ab quis, impedit molestias officia delectus labore tempore molestiae quas culpa nobis quo ratione aliquam blanditiis quisquam aperiam asperiores! Maxime facilis cum saepe fuga veritatis.
    Atque, sunt! Dolore suscipit nisi minima adipisci assumenda deserunt ipsum optio rem unde. Officiis necessitatibus expedita eius ea praesentium pariatur, ad quod ut non enim autem hic voluptatibus minus laborum.
    Nam dolorum libero repudiandae dolores aspernatur culpa rem illo distinctio, pariatur est adipisci dignissimos, dolorem optio modi architecto aliquam explicabo fuga. Excepturi fuga velit cumque minima tempora ex iste earum!
    Eveniet fuga eum corporis quidem aliquam. Cum, impedit. Accusamus quasi nisi nihil deleniti sint voluptates, illum aliquid, est debitis expedita ipsum nesciunt dolorem neque deserunt voluptas maxime amet rerum hic!
    Illo reprehenderit libero necessitatibus provident laborum est itaque odio repudiandae quibusdam placeat eos accusantium maiores sed reiciendis magnam, nobis nam quis fugiat consectetur vel aliquam. Quis, architecto dignissimos? Magni, eligendi.
    Quas numquam deserunt magni, voluptatum eligendi inventore amet esse cupiditate! Dolores doloremque recusandae veritatis quas culpa ex, sed nulla quibusdam eos ullam, soluta minima mollitia labore molestiae! Iure, nulla reprehenderit.
    Pariatur asperiores reprehenderit accusamus fuga vero aliquid ad expedita assumenda consequatur nam, natus totam aut nobis maxime tenetur possimus? Ea molestias inventore sapiente? Voluptates exercitationem soluta ipsam cupiditate excepturi perferendis.
    Fuga itaque quae quod maiores, eligendi nam aut illum beatae quis velit hic pariatur accusantium laboriosam temporibus consectetur quos cupiditate voluptas earum porro minus laborum illo unde quasi quibusdam. Eligendi.
    Ex ipsum provident ipsam praesentium reprehenderit autem eligendi. Corporis officiis tempore quo dolor necessitatibus, voluptatum suscipit magni, molestiae odit, amet expedita sunt accusamus nemo aperiam molestias eveniet totam adipisci eaque!
    Officia commodi fugiat error omnis, perspiciatis, sunt voluptate vero molestiae cumque dicta sed odio ad adipisci magni autem veniam! Laboriosam error aliquam neque totam autem rerum eligendi sunt dicta deserunt?
    Doloremque in, odit repellendus enim perspiciatis nam beatae assumenda ratione corporis incidunt suscipit temporibus, rerum consequuntur labore est quos obcaecati explicabo vitae? Iste molestiae doloremque, voluptates vitae quibusdam minima at.
    Natus adipisci minus iste incidunt, excepturi modi ea eaque sed, blanditiis id reiciendis eveniet aliquam sequi recusandae quae deserunt similique dignissimos eligendi totam quos hic mollitia! Quis itaque temporibus dolor.
    Eos iure doloribus sint suscipit commodi. Modi ut incidunt quia distinctio aut velit? Natus eum voluptate maiores eaque. Ut dolores doloremque vel! Eligendi ipsum corrupti iusto sapiente sed vero quasi?
    Libero, voluptatibus? Mollitia blanditiis tempore voluptatibus, assumenda ratione possimus quasi, adipisci aspernatur, tenetur natus reprehenderit quis? Mollitia eos exercitationem obcaecati debitis! Impedit quos porro quam amet omnis facilis officiis quia!
    Adipisci beatae labore exercitationem porro tenetur quos voluptate saepe asperiores accusamus a sunt, odit nihil commodi modi non pariatur maiores quidem minima harum veritatis ut, eum explicabo totam? Aut, ipsam!
    Et commodi non corrupti magni eligendi animi, optio unde voluptatum quidem quia ut placeat voluptatibus totam nobis ea ipsum quam accusantium maiores adipisci repellat itaque aut! Facilis quos ea voluptate.
    Laborum, quam? Aspernatur corrupti possimus velit et tempore similique quas? Vel molestiae tenetur eaque ipsa blanditiis, quo aspernatur rerum labore cupiditate deserunt iusto unde, perspiciatis non obcaecati minima corporis. Tempora?
    Explicabo commodi quae provident quis quaerat? Quisquam quas saepe numquam repellat nam omnis earum maiores nemo error sunt vero, minus beatae, natus similique, odio id! Est aperiam atque assumenda recusandae!
    Asperiores cupiditate quibusdam est voluptatum earum tempora, ratione unde dolor et. Laudantium assumenda eos ducimus. Officia inventore, commodi labore fugiat laborum nisi reprehenderit voluptate quisquam expedita. Officiis maiores nesciunt delectus?
  </section>
</main>

<?php get_footer(); ?>