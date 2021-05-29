<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('img/favicon.svg') }}" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>scientific diet</title>
    <style>
    @import url("https://use.typekit.net/jmk3xov.css");

      canvas {
        position: fixed;
        top: 0;
        left: 0;
      }
      
      
      :root {
        --dark-bg: rgba(15, 15, 15, 0.95);
        --spacing: 350px;
      
        font-family: brandon-grotesque, sans-serif;
        font-weight: 400;
        font-style: normal;
      }
      
      main {
        width: 100vw;
        color: white;
        z-index: 99;
        position: absolute;
        width: 100%;
        margin: 0px auto;
        padding: 120px 0px;
        
        display: grid;
        grid-template-columns: repeat(12, 1fr);
      }
      
      h1, h2, h3, blockquote {
        font-family: elevon, sans-serif;
        font-weight: 700;
        background-color: black;
       
        font-style: normal;
      }
      
      canvas {
        position: fixed;
        top: 0;
        left: 0;
      }
      
      
      
        header {
          
          grid-column: 2 / span 5;
          font-size: 2.5rem;
          padding: 2rem;
         
          margin-bottom: var(--spacing);
        }
      
        section {
          grid-column: 2 / 8;
          padding: 1rem;
          background: var(--dark-bg);
          font-size: 1.25rem;
          line-height: 1.5;
          margin-bottom: var(--spacing);
        }
      
        blockquote {
          margin: 0;
          padding: 0;
          grid-column: 2 / span 9;
          margin-bottom: var(--spacing);
        }
      
        blockquote p {
          color: black;
          background-color: white;
          font-size: 4rem;
          display: inline;
          line-height: 1;
        }
      
        .left {
          grid-column: 6 / 12;
        }
        </style>
  </head>
  <body>

    <canvas id="bg"></canvas>

    <main>

      <header>
        <h1>Scientific diet</h1>

      </header>


      <blockquote>
        <p></p>
      </blockquote>

      <section>
        <h2>chilopage</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

      </section>

      <section class="light">
        <h2>👩🏽‍🚀 Projects</h2>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <h2>🏆 Accomplishments</h2>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

      </section>

      <blockquote>
        <p>The best way out is always through </p>
      </blockquote>




    </main>

    <script>
    import './style.css';
    import * as THREE from 'three';
    import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls';

    // Setup

    const scene = new THREE.Scene();

    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

    const renderer = new THREE.WebGLRenderer({
      canvas: document.querySelector('#bg'),
    });

    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(window.innerWidth, window.innerHeight);
    camera.position.setZ(10);
    camera.position.setX(-3);

    renderer.render(scene, camera);

    // Torus
    const moonTexture1 = new THREE.TextureLoader().load('anguria.png');
    const normalTexture1 = new THREE.TextureLoader().load('normal.jpg');
    const geometry = new THREE.TorusGeometry(2, 9,100, 40);
    const material = new THREE.MeshStandardMaterial({  map: moonTexture1,normalMap: normalTexture1, });
    const torus = new THREE.Mesh(geometry, material);

    scene.add(torus);

    // Lights

    const pointLight = new THREE.PointLight(0xffffff);
    pointLight.position.set(10, 20, 3);

    const ambientLight = new THREE.AmbientLight(0xffffff);
    scene.add(pointLight, ambientLight);

    // Helpers

    // const lightHelper = new THREE.PointLightHelper(pointLight)
    // const gridHelper = new THREE.GridHelper(200, 50);
    // scene.add(lightHelper, gridHelper)

    // const controls = new OrbitControls(camera, renderer.domElement);

    function addStar() {
      const geometry = new THREE.SphereGeometry(0.1, 24, 24);
      const material = new THREE.MeshStandardMaterial({ color: 0xffffff });
      const star = new THREE.Mesh(geometry, material);

      const [x, y, z] = Array(3)
        .fill()
        .map(() => THREE.MathUtils.randFloatSpread(100));

      star.position.set(x, y, z);
      scene.add(star);
    }

    Array(200).fill().forEach(addStar);

    // Background

    const spaceTexture = new THREE.TextureLoader().load('foo.jpg');
    scene.background = spaceTexture;

    // Avatar

    const jeffTexture = new THREE.TextureLoader().load('llogoo.png');

    const jeff = new THREE.Mesh(new THREE.BoxGeometry(2, 2, 2), new THREE.MeshBasicMaterial({ map: jeffTexture }));

    scene.add(jeff);

    // Moon

    const moonTexture = new THREE.TextureLoader().load('mela.png');
    const normalTexture = new THREE.TextureLoader().load('normal.jpg');


    const moon = new THREE.Mesh(
      new THREE.SphereGeometry(3, 62, 62),
      new THREE.MeshStandardMaterial({
        map: moonTexture,
        normalMap: normalTexture,
      })
    );

    scene.add(moon);

    moon.position.z = 28;
    moon.position.setX(-10);

    jeff.position.z = -5;
    jeff.position.x = 2;

    // Scroll Animation

    function moveCamera() {
      const t = document.body.getBoundingClientRect().top;
      moon.rotation.x += 0.05;
      moon.rotation.y += 0.075;
      moon.rotation.z += 0.05;

      jeff.rotation.y += 0.001;
      jeff.rotation.z += 0.01;

      camera.position.z = t * -0.01;
      camera.position.x = t * -0.0002;
      camera.rotation.y = t * -0.0002;
    }

    document.body.onscroll = moveCamera;
    moveCamera();

    // Animation Loop

    function animate() {
      requestAnimationFrame(animate);

      torus.rotation.x += 0.01;
      torus.rotation.y += 0.005;
      torus.rotation.z += 0.01;

      moon.rotation.x += 0.005;

      // controls.update();

      renderer.render(scene, camera);
    }

    animate();

    </script>

















  </body>
</html>
