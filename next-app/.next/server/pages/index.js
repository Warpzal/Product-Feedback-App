(() => {
var exports = {};
exports.id = 405;
exports.ids = [405];
exports.modules = {

/***/ 251:
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
// ESM COMPAT FLAG
__webpack_require__.r(__webpack_exports__);

// EXPORTS
__webpack_require__.d(__webpack_exports__, {
  "default": () => (/* binding */ Home),
  "getStaticProps": () => (/* binding */ getStaticProps)
});

;// CONCATENATED MODULE: external "next/head"
const head_namespaceObject = require("next/head");
var head_default = /*#__PURE__*/__webpack_require__.n(head_namespaceObject);
// EXTERNAL MODULE: ./node_modules/next/link.js
var next_link = __webpack_require__(664);
;// CONCATENATED MODULE: external "@apollo/client"
const client_namespaceObject = require("@apollo/client");
;// CONCATENATED MODULE: ./lib/apollo-client.js

let client;
/**
 * getApolloClient
 */

function getApolloClient() {
  if (!client) {
    client = _createApolloClient();
  }

  return client;
}
/**
 * createApolloClient
 */

function _createApolloClient() {
  return new client_namespaceObject.ApolloClient({
    link: new client_namespaceObject.HttpLink({
      uri: process.env.WORDPRESS_GRAPHQL_ENDPOINT
    }),
    cache: new client_namespaceObject.InMemoryCache()
  });
}
// EXTERNAL MODULE: ./styles/Home.module.css
var Home_module = __webpack_require__(409);
var Home_module_default = /*#__PURE__*/__webpack_require__.n(Home_module);
// EXTERNAL MODULE: external "react/jsx-runtime"
var jsx_runtime_ = __webpack_require__(282);
;// CONCATENATED MODULE: ./pages/index.js
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) { symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); } keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }








function Home({
  page,
  posts
}) {
  const {
    title,
    description
  } = page;
  return /*#__PURE__*/(0,jsx_runtime_.jsxs)("div", {
    className: (Home_module_default()).container,
    children: [/*#__PURE__*/(0,jsx_runtime_.jsxs)((head_default()), {
      children: [/*#__PURE__*/jsx_runtime_.jsx("title", {
        children: title
      }), /*#__PURE__*/jsx_runtime_.jsx("meta", {
        name: "description",
        content: description
      }), /*#__PURE__*/jsx_runtime_.jsx("link", {
        rel: "icon",
        href: "/favicon.ico"
      })]
    }), /*#__PURE__*/(0,jsx_runtime_.jsxs)("main", {
      className: (Home_module_default()).main,
      children: [/*#__PURE__*/jsx_runtime_.jsx("h1", {
        className: (Home_module_default()).title,
        children: title
      }), /*#__PURE__*/jsx_runtime_.jsx("p", {
        className: (Home_module_default()).description,
        children: description
      }), /*#__PURE__*/(0,jsx_runtime_.jsxs)("ul", {
        className: (Home_module_default()).grid,
        children: [posts && posts.length > 0 && posts.map(post => {
          return /*#__PURE__*/jsx_runtime_.jsx("li", {
            className: (Home_module_default()).card,
            children: /*#__PURE__*/jsx_runtime_.jsx(next_link.default, {
              href: post.path,
              children: /*#__PURE__*/(0,jsx_runtime_.jsxs)("a", {
                children: [/*#__PURE__*/jsx_runtime_.jsx("h3", {
                  dangerouslySetInnerHTML: {
                    __html: post.title
                  }
                }), /*#__PURE__*/jsx_runtime_.jsx("div", {
                  dangerouslySetInnerHTML: {
                    __html: post.excerpt
                  }
                })]
              })
            })
          }, post.slug);
        }), !posts || posts.length === 0 && /*#__PURE__*/jsx_runtime_.jsx("li", {
          children: /*#__PURE__*/jsx_runtime_.jsx("p", {
            children: "Oops, no posts found!"
          })
        })]
      })]
    })]
  });
}
async function getStaticProps() {
  const apolloClient = getApolloClient();
  const data = await apolloClient.query({
    query: client_namespaceObject.gql`
		{
			generalSettings {
			title
			description
			}
			posts(first: 10000) {
			edges {
				node {
				id
				excerpt
				title
				slug
				}
			}
			}
		}`
  });
  const posts = data === null || data === void 0 ? void 0 : data.data.posts.edges.map(({
    node
  }) => node).map(post => {
    return _objectSpread(_objectSpread({}, post), {}, {
      path: `/posts/${post.slug}`
    });
  });

  const page = _objectSpread({}, data === null || data === void 0 ? void 0 : data.data.generalSettings);

  return {
    props: {
      page,
      posts
    }
  };
}

/***/ }),

/***/ 409:
/***/ ((module) => {

// Exports
module.exports = {
	"container": "Home_container__1EcsU",
	"main": "Home_main__1x8gC",
	"footer": "Home_footer__1WdhD",
	"title": "Home_title__3DjR7",
	"description": "Home_description__17Z4F",
	"code": "Home_code__axx2Y",
	"grid": "Home_grid__2Ei2F",
	"card": "Home_card__2SdtB",
	"logo": "Home_logo__1YbrH"
};


/***/ }),

/***/ 325:
/***/ ((module) => {

"use strict";
module.exports = require("next/dist/server/denormalize-page-path.js");

/***/ }),

/***/ 378:
/***/ ((module) => {

"use strict";
module.exports = require("next/dist/shared/lib/i18n/normalize-locale-path.js");

/***/ }),

/***/ 162:
/***/ ((module) => {

"use strict";
module.exports = require("next/dist/shared/lib/mitt.js");

/***/ }),

/***/ 773:
/***/ ((module) => {

"use strict";
module.exports = require("next/dist/shared/lib/router-context.js");

/***/ }),

/***/ 248:
/***/ ((module) => {

"use strict";
module.exports = require("next/dist/shared/lib/router/utils/get-asset-path-from-route.js");

/***/ }),

/***/ 372:
/***/ ((module) => {

"use strict";
module.exports = require("next/dist/shared/lib/router/utils/is-dynamic.js");

/***/ }),

/***/ 665:
/***/ ((module) => {

"use strict";
module.exports = require("next/dist/shared/lib/router/utils/parse-relative-url.js");

/***/ }),

/***/ 747:
/***/ ((module) => {

"use strict";
module.exports = require("next/dist/shared/lib/router/utils/querystring.js");

/***/ }),

/***/ 333:
/***/ ((module) => {

"use strict";
module.exports = require("next/dist/shared/lib/router/utils/route-matcher.js");

/***/ }),

/***/ 456:
/***/ ((module) => {

"use strict";
module.exports = require("next/dist/shared/lib/router/utils/route-regex.js");

/***/ }),

/***/ 620:
/***/ ((module) => {

"use strict";
module.exports = require("next/dist/shared/lib/utils.js");

/***/ }),

/***/ 297:
/***/ ((module) => {

"use strict";
module.exports = require("react");

/***/ }),

/***/ 282:
/***/ ((module) => {

"use strict";
module.exports = require("react/jsx-runtime");

/***/ }),

/***/ 431:
/***/ (() => {

/* (ignored) */

/***/ })

};
;

// load runtime
var __webpack_require__ = require("../webpack-runtime.js");
__webpack_require__.C(exports);
var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
var __webpack_exports__ = __webpack_require__.X(0, [664], () => (__webpack_exec__(251)));
module.exports = __webpack_exports__;

})();