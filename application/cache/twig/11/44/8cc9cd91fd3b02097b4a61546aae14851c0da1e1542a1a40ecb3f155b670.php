<?php

/* default/admin_pengajar/edit_ampuan.html */
class __TwigTemplate_11448cc9cd91fd3b02097b4a61546aae14851c0da1e1542a1a40ecb3f155b670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<strong>Edit Jadwal Ajar</strong>
";
        // line 3
        echo get_flashdata("edit");
        echo "

";
        // line 5
        echo form_open(((((("admin/pengajar/edit_ampuan/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . (isset($context["pengajar_id"]) ? $context["pengajar_id"] : null)) . "/") . $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "id")));
        echo "
<input type=\"hidden\" name=\"pengajar_id\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["pengajar_id"]) ? $context["pengajar_id"] : null), "html", null, true);
        echo "\">
<table class=\"table table-striped\">
    <tbody>
        <tr>
            <th width=\"27%\">Kelas <span class=\"text-error\">*</span></th>
            <td>
                <select name=\"kelas_id\" style=\"width:auto;\" id=\"kelas_id\">
                    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 14
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("kelas_id", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), ((($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id") == $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "kelas_id"))) ? (true) : (false))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                </select>
                <br>";
        // line 17
        echo form_error("kelas_id");
        echo "
            </td>
        </tr>
        <tr>
            <th>Mapel <span class=\"text-error\">*</span></th>
            <td>
                <select name=\"mapel_kelas_id\" style=\"width:auto\" id=\"mapel_kelas_id\">
                    ";
        // line 24
        if ((!twig_test_empty(get_post_data("kelas_id")))) {
            // line 25
            echo "                        ";
            $context["select_option"] = get_post_data("mapel_kelas_id");
            // line 26
            echo "                        ";
            $context["post_kelas_id"] = get_post_data("kelas_id");
            // line 27
            echo "                        ";
            $context["mapel_kelas"] = get_row_data("mapel_model", "retrieve_all_kelas", array(0 => null, 1 => (isset($context["post_kelas_id"]) ? $context["post_kelas_id"] : null)));
            // line 28
            echo "                    ";
        } else {
            // line 29
            echo "                        ";
            $context["select_option"] = $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "mapel_kelas_id");
            // line 30
            echo "                        ";
            $context["mapel_kelas"] = get_row_data("mapel_model", "retrieve_all_kelas", array(0 => null, 1 => $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "kelas_id")));
            // line 31
            echo "                    ";
        }
        // line 32
        echo "
                    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapel_kelas"]) ? $context["mapel_kelas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mak"]) {
            // line 34
            echo "                        ";
            $context["m"] = get_row_data("mapel_model", "retrieve", array(0 => $this->getAttribute((isset($context["mak"]) ? $context["mak"] : null), "mapel_id")));
            // line 35
            echo "                        ";
            if ((!twig_test_empty((isset($context["m"]) ? $context["m"] : null)))) {
                // line 36
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mak"]) ? $context["mak"] : null), "id"), "html", null, true);
                echo "\" ";
                echo ((((isset($context["select_option"]) ? $context["select_option"] : null) == $this->getAttribute((isset($context["mak"]) ? $context["mak"] : null), "id"))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
                echo "</option>
                        ";
            }
            // line 38
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mak'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </select>
                <br><span class=\"text-muted\">Pilih kelas terlebih dahulu</span>
                <br>";
        // line 41
        echo form_error("mapel_kelas_id");
        echo "
            </td>
        </tr>
        <tr>
            <th>Jam Mulai <span class=\"text-error\">*</span></th>
            <td>
                <input type=\"text\" name=\"jam_mulai\" style=\"width:19%\" placeholder=\"hh:mm\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, set_value("jam_mulai", twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_mulai"), "H:i")), "html", null, true);
        echo "\">
                <span class=\"pull-right text-muted\">Contoh : 08:30</span>
                <br>";
        // line 49
        echo form_error("jam_mulai");
        echo "
            </td>
        </tr>
        <tr>
            <th>Jam Selesai <span class=\"text-error\">*</span></th>
            <td>
                <input type=\"text\" name=\"jam_selesai\" style=\"width:19%\" placeholder=\"hh:mm\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, set_value("jam_selesai", twig_date_format_filter($this->env, $this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "jam_selesai"), "H:i")), "html", null, true);
        echo "\">
                <span class=\"pull-right text-muted\">Contoh : 13:30</span>
                <br>";
        // line 57
        echo form_error("jam_selesai");
        echo "
            </td>
        </tr>
        <tr>
            <th>Status</th>
            <td>
                <label class=\"checkbox\"><input type=\"checkbox\" name=\"aktif\" value=\"1\" ";
        // line 63
        echo twig_escape_filter($this->env, set_checkbox("aktif", "1", ((($this->getAttribute((isset($context["ma"]) ? $context["ma"] : null), "aktif") == 1)) ? (true) : (false))), "html", null, true);
        echo "> Aktif</label>
                <br>";
        // line 64
        echo form_error("aktif");
        echo "
            </td>
        </tr>
        <tr>
            <td colspan=\"2\"><button type=\"submit\" class=\"btn btn-primary\">Simpan</button></td>
        </tr>
    </tbody>
</table>
";
        // line 72
        echo form_close();
        echo "

<script type=\"text/javascript\">
\$('#kelas_id').change(function(){
    \$.ajax({
        type : \"POST\",
        url  : \"";
        // line 78
        echo twig_escape_filter($this->env, site_url("admin/ajax_post/mapel_kelas"), "html", null, true);
        echo "\",
        data : \"kelas_id=\" + this.value,
        success : function(data){
            \$('#mapel_kelas_id').html(data);
        }
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "default/admin_pengajar/edit_ampuan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 78,  180 => 72,  169 => 64,  165 => 63,  156 => 57,  151 => 55,  142 => 49,  137 => 47,  128 => 41,  124 => 39,  118 => 38,  108 => 36,  105 => 35,  102 => 34,  98 => 33,  95 => 32,  92 => 31,  89 => 30,  86 => 29,  83 => 28,  80 => 27,  77 => 26,  74 => 25,  72 => 24,  62 => 17,  59 => 16,  46 => 14,  42 => 13,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
