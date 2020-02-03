<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* article/show.html.twig */
class __TwigTemplate_716a391f9a2e90ef30964d5aace4cb5400b2017d7cc34492e1829b9cf48323d0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <article>
        <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", []), "html", null, true);
        echo "</h2>
        <div class=\"metadata\">Ecrit le ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", []), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", []), "H:i"), "html", null, true);
        echo "
            dans la catégorie ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "category", []), "title", []), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "author", []), "html", null, true);
        echo "</div>
        <div class=\"content\">
            <img src= \"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", []), "html", null, true);
        echo "\" alt=\"\">
            <p>";
        // line 13
        echo $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "content", []);
        echo "</p>
        </div>
    </article>

    <section id=\"commentaires\">
        <h1>";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "comments", [])), "html", null, true);
        echo " commentaires : </h1>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "comments", []));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 20
            echo "            <div class=comment\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", []), "html", null, true);
            echo " <small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "createdAt", []), "(d/m/Y à H:i)"), "html", null, true);
            echo "</small>
                    </div>
                    <div class=\"col\">
                        ";
            // line 26
            echo $this->getAttribute($context["comment"], "content", []);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
        ";
        // line 32
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 33
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["commentForm"] ?? $this->getContext($context, "commentForm")), 'form_start');
            echo "
            ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["commentForm"] ?? $this->getContext($context, "commentForm")), "author", []), 'row', ["attr" => ["placeholder" => "Votre nom"]]);
            echo "
            ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["commentForm"] ?? $this->getContext($context, "commentForm")), "content", []), 'row', ["attr" => ["placeholder" => "Votre commentaire"]]);
            echo "

            <button type=\"submit\" class=\"btn btn-success\">Commenter</button>
            ";
            // line 38
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["commentForm"] ?? $this->getContext($context, "commentForm")), 'form_end');
            echo "

        ";
        } else {
            // line 41
            echo "            <h2>Vous ne pouvez pas commenter si vous n'êtes pas connecté</h2>
            <a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_registration");
            echo "\" class=\"btn btn-primary\">Inscription</a>
            <a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\" class=\"btn btn-primary\">Connexion</a>
            <p></p>
        ";
        }
        // line 46
        echo "    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 46,  177 => 43,  173 => 42,  170 => 41,  164 => 38,  158 => 35,  154 => 34,  149 => 33,  147 => 32,  144 => 31,  133 => 26,  125 => 23,  120 => 20,  116 => 19,  112 => 18,  104 => 13,  100 => 12,  93 => 10,  87 => 9,  83 => 8,  79 => 6,  70 => 5,  52 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ article.title }}{% endblock %}

{% block body %}

    <article>
        <h2>{{ article.title }}</h2>
        <div class=\"metadata\">Ecrit le {{ article.createdAt | date('d/m/Y') }} à {{ article.createdAt | date('H:i') }}
            dans la catégorie {{ article.category.title }} par {{  article.author }}</div>
        <div class=\"content\">
            <img src= \"{{ article.image }}\" alt=\"\">
            <p>{{ article.content | raw }}</p>
        </div>
    </article>

    <section id=\"commentaires\">
        <h1>{{ article.comments | length }} commentaires : </h1>
        {%  for comment in article.comments %}
            <div class=comment\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        {{ comment.author }} <small>{{ comment.createdAt | date('(d/m/Y à H:i)') }}</small>
                    </div>
                    <div class=\"col\">
                        {{ comment.content | raw }}
                    </div>
                </div>
            </div>
        {%  endfor %}

        {%  if app.user %}
            {{ form_start(commentForm) }}
            {{ form_row(commentForm.author, {'attr': {placeholder: \"Votre nom\" }}) }}
            {{ form_row(commentForm.content, {'attr': {placeholder: \"Votre commentaire\" }}) }}

            <button type=\"submit\" class=\"btn btn-success\">Commenter</button>
            {{ form_end(commentForm) }}

        {% else %}
            <h2>Vous ne pouvez pas commenter si vous n'êtes pas connecté</h2>
            <a href=\"{{ path('security_registration') }}\" class=\"btn btn-primary\">Inscription</a>
            <a href=\"{{ path('security_login') }}\" class=\"btn btn-primary\">Connexion</a>
            <p></p>
        {% endif %}
    </section>

{% endblock %}", "article/show.html.twig", "/Users/dev09/Desktop/Reddit/app/Resources/views/article/show.html.twig");
    }
}
