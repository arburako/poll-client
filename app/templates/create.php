
    <main>
      <header>
        <h1>Create a new poll</h1>
      </header>

      <form action="">
        <section id="question">
          <h1>Ask a question</h1>
          <textarea id="poll-question" name="question" type="text" maxlength="140" placeholder="e.g. Who is your favorite historical person?"></textarea>
          <!--Mauris fermentum sem eget eros consequat, a egestas turpis auctor. Phasellus sit amet nisi non mauris egestas sed.-->
        </section>

        <section id="answers">
          <h1>Set some answers</h1>
        </section>
      </form>
    </main>

    <script>
      $(document).ready(function () {
        App.CreatePoll();
        $("textarea").charCount();
      });
    </script>