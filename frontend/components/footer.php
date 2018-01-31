<footer class="footer is-dark">
    <div class="container">
        <div class="columns">
            <div class="column is-4">
                <div id="about" class="content has-text-centered">
                    <img class="icon" src="img/icon.png">

                    <div class="content is-small">
                        A free and opensource client that communicates with the NEOSENSE RPC.
                    </div>

                    <div class="content is-small has-text-centered border-top">
                  <span class="icon has-text">
                      <img class="icon" src="img/CoZIcon.png"/>City Of Zion
                  </span>
                    </div>

                </div>
            </div>
            <div class="column is-4">
                <div id="share" class="content">
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading"><i class="fas fa-cogs"></i> PROCESSED TRANSFERS</p>
                            <p class="title">5M</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-4">
                <div id="sister">
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading"><i class="fas fa-cube"></i> CURRENT BLOCK</p>
                            <p class="title"><?php print_r ($neo->getBlockCount()); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>