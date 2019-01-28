# PostPage Flex

**[recent-blogposts]** gibt alle Beiträge (max. 1.000 Beiträge) in chronologischer Reihenfolge aus.

**[recent-blogposts posts_per_page="X"]** gibt die letzten X Beiträge in chronologischer Reihenfolge aus.

**[recent-blogposts orderby="Y"]** gibt alle Beiträge (max. 1.000 Beiträge) in Y-Reihenfolge aus.
Für Y können u.a. folgende Werte verwendet werden:
- ID
- author
- title
- modified
- relevance
- rand _(= random)_


**[recent-blogposts format="Z"]** gibt die Beiträge in einem anderen Format bzw. Seitenverhältnis aus. Wird dieser Parameter weggelassen, werden die Beiträge standardmäßig quadratisch dargestellt.
Für Z können folgende Werte verwendet werden:
- square
- 2x1
- 3x2

Natürlich können auch alle oder einzelne Parameter kombiniert werden: **[recent-blogposts format="3x2" posts_per_page="X" orderby="Y"]**

&copy; [Peter R. Stuhlmann](https://peter-stuhlmann-webentwicklung.de/)