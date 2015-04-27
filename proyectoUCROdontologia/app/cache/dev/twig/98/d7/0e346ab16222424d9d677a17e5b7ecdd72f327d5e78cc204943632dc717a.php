<?php

/* ConnectionBDBundle:HistorialMedico:index.html.twig */
class __TwigTemplate_98d70e346ab16222424d9d677a17e5b7ecdd72f327d5e78cc204943632dc717a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>HistorialMedico list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Dolorcabezafrecuente</th>
                <th>Historialdental</th>
                <th>Vertigo</th>
                <th>Desmayo</th>
                <th>Perdidadeconsiencia</th>
                <th>Problemasvisules</th>
                <th>Problemasauditivos</th>
                <th>Sinusitis</th>
                <th>Obstruccionnasal</th>
                <th>Problemastiroides</th>
                <th>Diabetes</th>
                <th>Cambiosinesperadospeso</th>
                <th>Disnea</th>
                <th>Tos</th>
                <th>Tuberculosis</th>
                <th>Enfisemapulmonar</th>
                <th>Asma</th>
                <th>Infartomiocardio</th>
                <th>Insuficienciacadiaca</th>
                <th>Hipertensionarterial</th>
                <th>Anginadepecho</th>
                <th>Soplocardiaco</th>
                <th>Fiebrereumatica</th>
                <th>Lesionescardiacascongenitas</th>
                <th>Valvulascardicasartificiales</th>
                <th>Anemia</th>
                <th>Tranfisiones</th>
                <th>Trobosis</th>
                <th>Anomalisasdecelulassangineas</th>
                <th>Hepatitis</th>
                <th>Ictericia</th>
                <th>Ulceragastrica</th>
                <th>Enfermedaddetramisionsexual</th>
                <th>Vih</th>
                <th>Paralisis</th>
                <th>Depresion</th>
                <th>Nerviosismo</th>
                <th>Tension</th>
                <th>Convulsiones</th>
                <th>Hemorragias</th>
                <th>Artritis</th>
                <th>Reumatismo</th>
                <th>Transplantes</th>
                <th>Alteracionesenrinones</th>
                <th>Intoleranciaaalimentos</th>
                <th>Mialgias</th>
                <th>Limitaionesdemovimiento</th>
                <th>Trumatismoenlacara</th>
                <th>Amigdalitis</th>
                <th>Cancer</th>
                <th>Leucemia</th>
                <th>Embarazo</th>
                <th>Aa</th>
                <th>Aq</th>
                <th>Medicamentos</th>
                <th>Historialfamiliarafp</th>
                <th>Historialfamiliarafnp</th>
                <th>Historialsocialtipodieta</th>
                <th>Historialsocialtabaquismo</th>
                <th>Historialsocialalcoholismo</th>
                <th>Historialsocialconsumodrogas</th>
                <th>Historiadentalultimavisita</th>
                <th>Historiadentaltratamientorecibido</th>
                <th>Historiadentalultimaradiografia</th>
                <th>Historiadentalreaccionesanestecia</th>
                <th>Historiadentalexperienciasdesagradables</th>
                <th>Historiadentalfrecuendiacepillado</th>
                <th>Historiadentaltipocepillo</th>
                <th>Historiadentaltecnicacepillo</th>
                <th>Historiadentalfrecuenciadeusohilodental</th>
                <th>Historiadentaltipohilodental</th>
                <th>Historiadentalenguajebucal</th>
                <th>Historiadentaldificultadparaabrirboca</th>
                <th>Historiadentalruidomandubula</th>
                <th>Historiadentaldislocamientomandubula</th>
                <th>Historiadentaldoloroido</th>
                <th>Historiadentaldolormasticar</th>
                <th>Historiadentalcambiosmordida</th>
                <th>Historiadentaldoloresdecabeza</th>
                <th>Historiadentaltraumacabeza</th>
                <th>Historiadentalartritis</th>
                <th>Historiadentalproblemamasticar</th>
                <th>Historiadentalrechinadodientes</th>
                <th>Historiadentalproblemaatm</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 98
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 99
            echo "            <tr>
                <td><a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historialmedico_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "dolorCabezaFrecuente", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historialDental", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "vertigo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "desmayo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "perdidaDeConsiencia", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "problemasVisules", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "problemasAuditivos", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "sinusitis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "obstruccionNasal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "problemasTiroides", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "diabetes", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cambiosInesperadosPeso", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "disnea", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tos", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tuberculosis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "enfisemaPulmonar", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "asma", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "infartoMiocardio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "insuficienciaCadiaca", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "hipertensionArterial", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "anginaDePecho", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "soploCardiaco", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fiebreReumatica", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lesionesCardiacasCongenitas", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "valvulasCardicasArtificiales", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "anemia", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tranfisiones", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "trobosis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "anomalisasDeCelulasSangineas", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "hepatitis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ictericia", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ulceraGastrica", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "enfermedadDeTramisionSexual", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "vih", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "paralisis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "depresion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nerviosismo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tension", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "convulsiones", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "hemorragias", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "artritis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "reumatismo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "transplantes", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "alteracionesEnRinones", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "intoleranciaAAlimentos", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "mialgias", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "limitaionesDeMovimiento", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "trumatismoEnLaCara", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "amigdalitis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cancer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "leucemia", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "embarazo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "aa", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "aq", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "medicamentos", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historialFamiliarAfp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historialFamiliarAfnp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historialSocialTipoDieta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historialSocialTabaquismo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historialSocialAlcoholismo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historialSocialConsumoDrogas", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalUltimaVisita", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalTratamientoRecibido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalUltimaRadiografia", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalReaccionesAnestecia", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalExperienciasDesagradables", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalFrecuendiaCepillado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalTipoCepillo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalTecnicaCepillo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalFrecuenciaDeUsoHiloDental", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalTipoHiloDental", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalEnguajeBucal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalDificultadParaAbrirBoca", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalRuidoMandubula", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalDislocamientoMandubula", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalDolorOido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalDolorMasticar", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalCambiosMordida", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalDoloresDeCabeza", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalTraumaCabeza", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalArtritis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalProblemaMasticar", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalRechinadoDientes", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "historiaDentalProblemaAtm", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historialmedico_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historialmedico_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("historialmedico_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "ConnectionBDBundle:HistorialMedico:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 202,  505 => 197,  493 => 191,  487 => 188,  480 => 184,  476 => 183,  472 => 182,  468 => 181,  464 => 180,  460 => 179,  456 => 178,  452 => 177,  448 => 176,  444 => 175,  440 => 174,  436 => 173,  432 => 172,  428 => 171,  424 => 170,  420 => 169,  416 => 168,  412 => 167,  408 => 166,  404 => 165,  400 => 164,  396 => 163,  392 => 162,  388 => 161,  384 => 160,  380 => 159,  376 => 158,  372 => 157,  368 => 156,  364 => 155,  360 => 154,  356 => 153,  352 => 152,  348 => 151,  344 => 150,  340 => 149,  336 => 148,  332 => 147,  328 => 146,  324 => 145,  320 => 144,  316 => 143,  312 => 142,  308 => 141,  304 => 140,  300 => 139,  296 => 138,  292 => 137,  288 => 136,  284 => 135,  280 => 134,  276 => 133,  272 => 132,  268 => 131,  264 => 130,  260 => 129,  256 => 128,  252 => 127,  248 => 126,  244 => 125,  240 => 124,  236 => 123,  232 => 122,  228 => 121,  224 => 120,  220 => 119,  216 => 118,  212 => 117,  208 => 116,  204 => 115,  200 => 114,  196 => 113,  192 => 112,  188 => 111,  184 => 110,  180 => 109,  176 => 108,  172 => 107,  168 => 106,  164 => 105,  160 => 104,  156 => 103,  152 => 102,  148 => 101,  142 => 100,  139 => 99,  135 => 98,  39 => 4,  36 => 3,  11 => 1,);
    }
}
