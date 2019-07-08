# WP PostPage Flex

![Wordpress](https://img.shields.io/badge/Wordpress-blue.svg)
[![MIT License](https://img.shields.io/github/license/peter-stuhlmann/WP-Plugin-PostPage.svg)](https://github.com/peter-stuhlmann/WP-Plugin-PostPage/blob/master/LICENSE) 
![Language](https://img.shields.io/badge/lang-PHP/SCSS-orange.svg)
![Code size](https://img.shields.io/github/languages/code-size/peter-stuhlmann/WP-Plugin-PostPage.svg)
[![open issues](https://img.shields.io/github/issues/peter-stuhlmann/WP-Plugin-PostPage.svg)](https://github.com/peter-stuhlmann/WP-Plugin-PostPage/issues?q=is%3Aopen+is%3Aissue)
[![closed issues](https://img.shields.io/github/issues-closed/peter-stuhlmann/WP-Plugin-PostPage.svg)](https://github.com/peter-stuhlmann/WP-Plugin-PostPage/issues?q=is%3Aissue+is%3Aclosed)
[![closed issues](https://img.shields.io/badge/dev-Peter%20R.%20Stuhlmann-green.svg)](https://peter-stuhlmann-webentwicklung.de)

**[recent-blogposts]** gibt alle Beiträge in chronologischer Reihenfolge aus. Dabei werden nur das Beitragsbild sowie der Titel des Beitrags ausgegeben.

Mit dem Shortcode **[recent-blogposts-complex]** werden ebenfalls alle Beiträge in chronologischer Reihenfolge ausgegeben. Es werden allerdings neben dem Titel und dem Beitragsbild auch das Veröffentlichungsdatum, der Autor und ein kurzer Textausschnitt ausgegeben.

Diese Shortcodes können durch Parameter erweitert werden, um individuelle Einstellungen für die Ausgabe der Blogposts zu treffen. Sie werden einfach zusätzlich in die eckigen Klammern geschrieben.

**posts_per_page="X"** gibt die letzten X Beiträge in chronologischer Reihenfolge aus.

**orderby="Y"** gibt alle Beiträge in Y-Reihenfolge aus.
Für Y können u.a. folgende Werte verwendet werden:
-ID
- author
- title
- modified
- relevance
- rand _(= random)_


**format="Z"** gibt die Beiträge in einem anderen Format bzw. Seitenverhältnis aus. Wird dieser Parameter weggelassen, werden die Beiträge standardmäßig beim Shortcode
- [recent-blogposts] quadratisch und bei
- [recent-blogposts-complex] im Verhältnis 2:1 
dargestellt.
Für Z können folgende Werte verwendet werden:
- square
- 2x1
- 3x2

**category_name="abc"** gibt alle Beiträge der Kategorie abc in chronologischer Reihenfolge aus.

**tag="xyz"** gibt alle Beiträge mit dem Tag xyz in chronologischer Reihenfolge aus.

**hover="grayscale"** sorgt dafür, dass das Beitragsbild beim Überfahren mit der Maus in Graustufen angezeigt wird. Wird dieser Parameter weggelassen, ist der Effekt umgekehrt: Die Bilder werden standardmäßig in Graustufen gezeigt und beim Überfahren mit der Maus nehmen sie die entsprechenden Originalfarben an.

Natürlich können auch alle oder einzelne Parameter kombiniert werden: z.B. **[recent-blogposts format="3x2" posts_per_page="X" orderby="Y" category_name="abc" tag="xyz"]**

---

## License

Licensed under the [MIT](https://github.com/peter-stuhlmann/WP-Plugin-PostPage/blob/master/LICENSE) License.

---

[&copy; Peter R. Stuhlmann Webentwicklung](https://peter-stuhlmann-webentwicklung.de). All rights reserved.