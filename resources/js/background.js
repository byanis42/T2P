import * as THREE from 'three';

let scene, camera, renderer;
let geometry, material, mesh;

function init() {
    scene = new THREE.Scene();

    camera = new THREE.PerspectiveCamera(
        7,
        window.innerWidth / window.innerHeight,
        0.1,
        1000
    );

    // renderer = new THREE.WebGLRenderer({ alpha: true });
    // renderer.setSize(window.innerWidth, window.innerHeight);
    // document.body.appendChild(renderer.domElement);

	const container = document.getElementById('threejs-background');
    renderer = new THREE.WebGLRenderer({ alpha: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    container.appendChild(renderer.domElement);

    geometry = new THREE.TorusKnotGeometry(0.4, 0.1, 100, 8);
    material = new THREE.MeshNormalMaterial();

    mesh = new THREE.Mesh(geometry, material);
    scene.add(mesh);

    camera.position.z = 1;
}

function animate() {
    requestAnimationFrame(animate);

    mesh.rotation.x += 0.0001;
    mesh.rotation.y += 0.001;

    renderer.render(scene, camera);
}


init();
animate();
