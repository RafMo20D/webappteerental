const featureFlags = {
  featureA: true,
  featureB: false
};

function checkFeatureFlag(feature) {
  return featureFlags[feature];
}

if (checkFeatureFlag('featureA')) {
  // do something if featureA is enabled
} else {
  // do something else if featureA is disabled
}
