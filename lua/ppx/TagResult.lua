-- automatically generated by the FlatBuffers compiler, do not modify

-- namespace: ppx

local flatbuffers = require('flatbuffers')

local TagResult = {} -- the module
local TagResult_mt = {} -- the class metatable

function TagResult.New()
    local o = {}
    setmetatable(o, {__index = TagResult_mt})
    return o
end
function TagResult.GetRootAsTagResult(buf, offset)
    local n = flatbuffers.N.UOffsetT:Unpack(buf, offset)
    local o = TagResult.New()
    o:Init(buf, n + offset)
    return o
end
function TagResult_mt:Init(buf, pos)
    self.view = flatbuffers.view.New(buf, pos)
end
function TagResult.Start(builder) builder:StartObject(0) end
function TagResult.End(builder) return builder:EndObject() end

return TagResult -- return the module