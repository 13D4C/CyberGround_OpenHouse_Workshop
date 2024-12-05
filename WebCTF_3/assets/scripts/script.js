document.addEventListener("DOMContentLoaded", function () {
  const blogPostsContainer = document.getElementById("blog-posts");

  fetch("api.php")
    .then((response) => response.json())
    .then((blogPosts) => {
      blogPostsContainer.innerHTML = "";

      if (blogPosts.length === 0) {
        blogPostsContainer.innerHTML = "<p>No blog posts found.</p>";
        return;
      }

      blogPosts.forEach((post, index) => {
        const postElement = document.createElement("div");
        postElement.classList.add("blog-post");
        postElement.innerHTML = `
                    <div class="card mb-4">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="heading${index}">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${index}" aria-expanded="true" aria-controls="collapse${index}">
                              <h5 class="card-title">${post.title}</h5>
                              </button>
                            </h2>
                            <div id="collapse${index}" class="accordion-collapse collapse show" aria-labelledby="heading${index}" data-bs-parent="#blog-posts">
                              <div class="accordion-body">
                        <div class="card-body">
                            <h5 class="card-title">${post.title}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">${post.date}</h6>
                            <p class="card-text">${post.content}</p>
                        </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="accordion" id="accordionExample">

                `;
        blogPostsContainer.appendChild(postElement);
      });
    })
    .catch((error) => {
      console.error("Error fetching blog posts:", error);
      blogPostsContainer.innerHTML = "<p>Error loading blog posts.</p>";
    });
});

/* Flag Part 4:  _fl4g} */
