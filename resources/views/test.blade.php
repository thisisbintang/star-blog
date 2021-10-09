<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur enim cupiditate ea, quae culpa maiores, est eos voluptatem, nisi maxime obcaecati tempora dolorum? Facere, voluptatem, quod odio perspiciatis sequi hic ex dolorem velit itaque voluptate odit ratione similique ducimus eius. Ipsam ab sit aperiam voluptates assumenda, recusandae, praesentium quasi qui nihil totam odio? Saepe repellat tempora provident distinctio temporibus obcaecati, nihil aliquid, sed repellendus rerum odio assumenda maiores dolor omnis? Quis magnam deserunt harum animi placeat, vitae ex ullam odit laborum officiis, quisquam adipisci enim autem unde earum. Molestiae doloremque assumenda unde impedit odio sint excepturi ducimus? Expedita provident asperiores corrupti deserunt excepturi delectus obcaecati suscipit modi tempore? Facere veniam hic ipsam necessitatibus ut ipsum maiores dolor, iste debitis minima?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus earum et facilis suscipit, excepturi quo repudiandae aspernatur obcaecati autem assumenda, labore velit reprehenderit quasi consequatur! Quibusdam impedit dolorum nihil eum beatae tenetur vero tempore ab architecto, iusto velit quod aliquid nam atque quo asperiores expedita accusantium tempora, laborum saepe animi.</p>

Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magnam, qui consequuntur deleniti earum cupiditate ipsam minima fugiat? Quae, corrupti.

Category::create([
    'name' => 'Arsitektur Bangunan',
    'slug' => 'arsitektur-bangunan'
])

Author::create([
    'name' => 'Joko',
    'slug' => 'joko'
])

Post::create([
    'title' => 'Judul keenam',
    'slug' => 'judul-keenam',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus earum et facilis suscipit, excepturi quo repudiandae aspernatur obcaecati autem assumenda',
    'author_id' => 3,
    'category_id' => 1,
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur enim cupiditate ea, quae culpa maiores, est eos voluptatem, nisi maxime obcaecati tempora dolorum? Facere, voluptatem, quod odio perspiciatis sequi hic ex dolorem velit itaque voluptate odit ratione similique ducimus eius. Ipsam ab sit aperiam voluptates assumenda, recusandae, praesentium quasi qui nihil totam odio? Saepe repellat tempora provident distinctio temporibus obcaecati, nihil aliquid, sed repellendus rerum odio assumenda maiores dolor omnis? Quis magnam deserunt harum animi placeat, vitae ex ullam odit laborum officiis, quisquam adipisci enim autem unde earum. Molestiae doloremque assumenda unde impedit odio sint excepturi ducimus? Expedita provident asperiores corrupti deserunt excepturi delectus obcaecati suscipit modi tempore? Facere veniam hic ipsam necessitatibus ut ipsum maiores dolor, iste debitis minima?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus earum et facilis suscipit, excepturi quo repudiandae aspernatur obcaecati autem assumenda, labore velit reprehenderit quasi consequatur! Quibusdam impedit dolorum nihil eum beatae tenetur vero tempore ab architecto, iusto velit quod aliquid nam atque quo asperiores expedita accusantium tempora, laborum saepe animi.</p>'
])