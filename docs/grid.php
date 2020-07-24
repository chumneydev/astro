<section>
    <div class="column">
        <h1>Grid</h1>
        <p>The new grid structure should be the easiest grid to implement that we have ever had. We have slimmed down the markup to hopefully be easier to understand. All you need for a simple grid is the following:</p>
    </div>
</section>

<section>
    <div class="column">
        <pre>
        <code>    
            &lt;section>
                &lt;div class="column">&lt;/div>
            &lt;/section>    
        </code>    
        </pre>
    </div>
</section>    

<section>
    <div class="column">
        <p>To break it down, section is your row and the div "column" is your column. The interesting part of the new grid is that columns will automatically fill the remaining space of the section.</p>
    </div>
</section>

<section>
    <div class="column">
        <div class="feature"></div>
    </div>
    <div class="column">
        <div class="feature"></div>
    </div>
</section>

<section>
    <div class="column">
        <pre>
        <code>    
            &lt;section>
                &lt;div class="column">&lt;/div>
                &lt;div class="column">&lt;/div>
            &lt;/section>    
        </code>    
        </pre>
    </div>
</section>    


<section>
    <div class="column">
        <p>If you need a column to take up a more specific width, we have the following modifiers to use:</p>
        <ul>
            <li>.is-one-fourth</li>
            <li>.is-three-fourths</li>
            <li>.is-one-third</li>
            <li>.is-two-thirds</li>
        </ul>
        <p>Just add one of the following to your column to achieve the new width. The sibling column will automatically resize to fill the remain space.</p>    
    </div>
</section>

<section>
    <div class="column is-three-fourths">
        <div class="feature"></div>
    </div>
    <div class="column">
        <div class="auto"></div>
    </div>
</section>

<section>
    <div class="column">
        <pre>
        <code>    
            &lt;section>
                &lt;div class="column is-three-fourths">&lt;/div>
                &lt;div class="column">&lt;/div>
            &lt;/section>    
        </code>    
        </pre>
    </div>
</section>    

<section>
    <div class="column">
        <p>Note: Only use one of these modifiers per row.</p>
    </div>
</section>

<section>
    <div class="column">
        <p>If you need more granular control over the widths, you can use the following modifiers as well:</p>
        <ul>
            <li>.is-one</li>
            <li>.is-two</li>
            <li>.is-three</li>
            <li>.is-four</li>
            <li>.is-five</li>
            <li>.is-six</li>
            <li>.is-seven</li>
            <li>.is-eight</li>
            <li>.is-nine</li>
            <li>.is-ten</li>
            <li>.is-eleven</li>
            <li>.is-twelve</li>
        </ul>
    </div>
</section>


<section>
    <div class="column is-one">
        <div class="feature"></div>
    </div>
    <div class="column">
        <div class="auto"></div>
    </div>
</section>
<section>
    <div class="column is-two">
        <div class="feature"></div>
    </div>
    <div class="column">
        <div class="auto"></div>
    </div>
</section>
<section>
    <div class="column is-three">
        <div class="feature"></div>
    </div>
    <div class="column">
        <div class="auto"></div>
    </div>
</section>
<section>
    <div class="column is-four">
        <div class="feature"></div>
    </div>
    <div class="column">
        <div class="auto"></div>
    </div>
</section>

<section>
    <div class="column is-five">
        <div class="feature"></div>
    </div>
    <div class="column">
        <div class="auto"></div>
    </div>
</section>

<section>
    <div class="column is-six">
        <div class="feature"></div>
    </div>
    <div class="column">
        <div class="auto"></div>
    </div>
</section>

<section>
    <div class="column is-seven">
        <div class="feature"></div>
    </div>
    <div class="column">
        <div class="auto"></div>
    </div>
</section>

<section>
    <div class="column is-eight">
        <div class="feature"></div>
    </div>
    <div class="column">
        <div class="auto"></div>
    </div>
</section>

<section>
    <div class="column is-nine">
        <div class="feature"></div>
    </div>
    <div class="column">
        <div class="auto"></div>
    </div>
</section>

<section>
    <div class="column is-ten">
        <div class="feature"></div>
    </div>
    <div class="column">
        <div class="auto"></div>
    </div>
</section>

<section>
    <div class="column is-eleven">
        <div class="feature"></div>
    </div>
    <div class="column">
        <div class="auto"></div>
    </div>
</section>

<section>
    <div class="column is-twelve">
        <div class="feature"></div>
    </div>
</section>

<section>
    <div class="column is-acura">
        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue. Curabitur blandit tempus porttitor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Curabitur blandit tempus porttitor.</p>
    </div>
    <div class="column is-buick">
        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue. Curabitur blandit tempus porttitor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Curabitur blandit tempus porttitor.</p>
    </div>
</section>
