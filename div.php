<div id="title">
    <div id="creator">Created by Metaller</div>
    <div id="ver">Ver. 1.0</div>
    
    <div id="menu">
        <form>
            <button name="news" type="submit" class="button">
            Новости
            </button>
        </form>
        <form>
            <button name="FAQ" type="submit" class="button">
            FAQ
            </button>
        </form>
        <form>
            <button name="mods" type="submit" class="button">
            Моды
            </button>
        </form>
        <form>
            <button name="world_map" type="submit" class="button">
            Карта мира
            </button>
        </form>
        <form>
            <button name="statistics" type="submit" class="button">
            Cтатистика
            </button>
        </form>
        <form>
            <button formaction="forum.php" name="forum" type="submit" 
                    class="button">
            Форум
            </button>
        </form>
        <form>
            <button name="garbage" type="submit" class="button">
            Помойка ONLINE
            </button>
        </form>
        <div id="status">
            <?php
                include ('section/status.php');
            ?>
        </div>
        <div id="digital_watch" style="color: gray;">            
        </div>
    </div>

    <div id="info">
        <div id="info_list">
            <?php
            echo '<img src="style/4.gif" width="150" height="150" 
                    hspace="15" vspace="15">'
            ?>
            <div id="link_status">
            <a href="http://www.want2vote.com/project/id250/" target="_blank">
            <img src="http://www.want2vote.com/_status/pictures/status_votebanner/250.jpg" /></a>
            <a href="http://mctop.su/rating/vote/Yarrros2">
            <img src="http://mctop.su/counter/p11487" /></a>
            <!--LiveInternet counter--><script type="text/javascript"><!--
            document.write("<a href='http://www.liveinternet.ru/click' "+
            "target=_blank><img src='//counter.yadro.ru/hit?t57.6;r"+
            escape(document.referrer)+((typeof(screen)=="undefined")?"":
            ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
            screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
            ";"+Math.random()+
            "' alt='' title='LiveInternet' "+
            "border='0' width='88' height='31'><\/a>")
            //--></script><!--/LiveInternet-->
            <a href="http://counter.mns.ru" target="_blank">
            <img border="0" src="http://counter.mns.ru/1_blue.png" 
                 alt="Счетчик" title="Рейтинг WEB-сайтов сети MNS.RU" /></a>
            </div>
        </div>
    </div>

    <div id="list">
    </div>
    <div id="frame">
        <?php
        if  (isset($_REQUEST['news']))
        {
            include("section/news.php");
        }
        elseif  (isset($_REQUEST['FAQ']))
        {
            include("section/FAQ.php");
        }
        elseif  (isset($_REQUEST['mods']))
        {
            include("section/mods.php");
        }
        elseif  (isset($_REQUEST['world_map']))
        {
            echo '<iframe src="http://server.mfmc.su:8123/" width="570" 
                height="900" frameborder="0" scrolling="no" seamless></iframe>';
        }
        elseif  (isset($_REQUEST['statistics']))
        {
            echo '<iframe src="/Stat" width="570" height="900" frameborder="0">
                </iframe>';
        }
        elseif  (isset($_REQUEST['garbage']))
        {
            echo '<iframe src="http://server.mfmc.su:7776/" width="560" 
                height="900" frameborder="0" scrolling="no" seamless></iframe>';
        }
        else 
        {
            include("section/hello.php");
        }
        ?>                    
    </div>
</div>