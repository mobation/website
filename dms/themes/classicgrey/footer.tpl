              </div>
            </div>
          </div>
        </div>

        <div id="left" class="pad_top_large">
            {ft_include file="menu.tpl"}
        </div>
      </div>

      <div class="clear"></div>

    </div>
  </div>
</div>

{* only display the footer area if there is some text entered for it *}
{if $footer_text != "" || $g_enable_benchmarking}
  <div id="footer">
    {$footer_text|default:""}
    {show_page_load_time}
  </div>
{/if}

</body>
</html>
